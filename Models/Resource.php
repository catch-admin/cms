<?php

declare(strict_types=1);

namespace Modules\Cms\Models;

use Catch\Base\CatchModel as Model;

/**
 * @property $id
 * @property $name
 * @property $content
 * @property $url
 * @property $description
 * @property $type
 * @property $is_visible
 * @property $is_target
 * @property $creator_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
*/
class Resource extends Model
{


    protected $table = 'cms_resources';

    protected $fillable = [ 'id', 'name', 'content', 'url', 'description', 'type', 'is_visible', 'is_target','creator_id', 'created_at', 'updated_at', 'deleted_at' ];

    /**
     * @var array
     */
    protected array $fields = ['id','name','content','url','description','type','is_target','is_visible','updated_at'];

    /**
     * @var array
     */
    protected array $form = ['name','content','url','description','type','is_target','is_visible'];

    /**
     * @var array
     */
    public array $searchable = [
        'name' => 'like',
        'type' => '='
    ];
}
