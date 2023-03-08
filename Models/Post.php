<?php

declare(strict_types=1);

namespace Modules\Cms\Models;

use Catch\Base\CatchModel as Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Cms\Enums\Visible;
use Modules\User\Models\User;
use Illuminate\Support\Facades\Request;

/**
 * @property $id
 * @property $category_id
 * @property $author
 * @property $title
 * @property $content
 * @property $excerpt
 * @property $status
 * @property $is_can_comment
 * @property $password
 * @property $order
 * @property $user_id
 * @property $type
 * @property $comment_count
 * @property $creator_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
*/
class Post extends Model
{
    protected $table = 'cms_posts';

    protected $fillable = [ 'id', 'category_id', 'author', 'title', 'cover', 'content', 'excerpt', 'status', 'is_can_comment', 'visible', 'top','password', 'order', 'user_id', 'type', 'comment_count', 'creator_id', 'created_at', 'updated_at', 'deleted_at' ];

    /**
     * @var array
     */
    protected array $fields = ['id','author','title','status','is_can_comment','password','order','created_at', 'top'];

    /**
     * @var array
     */
    protected array $form = ['category_id', 'author','title','cover','content','excerpt','status','visible', 'top', 'is_can_comment','password','order'];

    /**
     * booted
     */
    public static function booted()
    {
        // 如果不是密码查看，密码置空
        static::saving(function (Post $post){
            if (! Visible::PASSWORD->assert((int) $post->visible))  {
                $post->password = '';
            }
        });

        // 保存后
        static::saved(function (Post $post){
            (new static())->savePostTags($post);
        });
    }


    /**
     * tags
     *
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tags::class, PostHasTags::class, 'post_id', 'tag_id');
    }

    /**
     * get list
     *
     * @return LengthAwarePaginator|mixed
     */
    public function getList(): mixed
    {
        return $this->select('id', 'title', 'status', 'is_can_comment', 'order', 'top', 'updated_at')
                    ->addSelect([
                        'category' => Category::whereColumn('id', $this->table. '.category_id')->select('name')->limit(1)
                    ])->addSelect([
                        'author' => User::whereColumn('author', 'users.id')->select('username')->limit(1)
                    ])
                    ->orderByDesc('id')
                    ->when($title = Request::get('title'), function ($query) use ($title){
                        $query->whereLike('title', $title);
                    })
                    ->when($categoryId = Request::get('category_id'), function ($query) use ($categoryId){
                        $query->where('category_id', $categoryId);
                    })
                    ->paginate(Request::get('limit', 10));
    }

    /**
     * save tags
     *
     * @param Post $post
     */
    public function savePostTags(Post $post)
    {
        $tagNames = Request::get('tags');

        if (! $tagNames) {
            return;
        }

        $tags = Tags::getTagsByNames($tagNames);
        $existTagNames = $tags->pluck('name');

        $tagIds = $tags->pluck('id')->toArray();
        foreach ($tagNames as $tagName) {
            if (! $existTagNames->contains($tagName)) {
                $tagIds[] = app(Tags::class)->storeBy(['name' => $tagName]);
            }
        }

        $post->tags()->sync($tagIds);
    }

    /**
     * parse int author
     *
     * @return Attribute
     */
    public function author(): Attribute
    {
        return Attribute::make(
            get: fn($value) => intval($value),

            set: fn($value) => intval($value)
        );
    }
}
