<?php

declare(strict_types=1);

namespace Modules\Cms\Models;

use Catch\Base\CatchModel as Model;
use Modules\Cms\Enums\CategoryType;

/**
 * @property $id
 * @property $parent_id
 * @property $name
 * @property $slug
 * @property $order
 * @property $post_count
 * @property $creator_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 * @property $type
 * @property $href
*/
class Category extends Model
{
    protected $table = 'cms_category';

    protected $fillable = [ 'id', 'parent_id', 'name', 'slug', 'order', 'type', 'href',  'post_count', 'creator_id', 'created_at', 'updated_at', 'deleted_at' ];

    /**
     * @var array
     */
    protected array $fields = ['id','parent_id','name','slug','order','post_count','created_at','updated_at'];

    /**
     * @var array
     */
    protected array $form = ['parent_id','name','slug','type', 'href', 'order'];

    /**
     * @var array
     */
    public array $searchable = [
        'name' => 'like'
    ];
    protected bool $isPaginate = false;

    protected bool $asTree = true;

    protected string $sortField = 'order';

   public static function booted()
   {
       // 如果是文章类型的分类，href 置空
       static::saving(function (Category $category){
           if (CategoryType::ARTICLE->assert((int) $category->type))  {
               $category->href = '';
           }
       });
   }
}
