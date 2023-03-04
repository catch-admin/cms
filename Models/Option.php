<?php
declare(strict_types=1);

namespace Modules\Cms\Models;

use Catch\Base\CatchModel as Model;


/**
 * @property $id
 * @property $key
 * @property $value
 * @property $autoload
 * @property $creator_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 */
class Option extends Model
{
    //
    protected $table = 'cms_options';

    protected $fillable = [
      'id', 'key', 'value', 'autoload', 'created_at', 'updated_at', 'deleted_at'
    ];
}
