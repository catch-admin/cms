<?php

declare(strict_types=1);

namespace Modules\Cms\Models;

use Catch\Base\CatchModel as Model;

/**
 * @property $id
 * @property $name
 * @property $creator_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
*/
class Tag extends Model
{
    

    protected $table = 'cms_tags';

    protected $fillable = [ 'id', 'name', 'creator_id', 'created_at', 'updated_at', 'deleted_at' ];

    /**
     * @var array
     */
    protected array $fields = ['id','name','created_at','updated_at'];

    /**
     * @var array
     */
    protected array $form = ['name'];

    /**
     * @var array
     */
    public array $searchable = [
        
    ];

    
}
