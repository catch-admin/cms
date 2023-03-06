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

    protected array $keysOfBoolValue = [
        'site_comment_limit',
        'site_comment_need_email',
        'site_comment_need_login',
        'site_comment_nested',
        'site_comment_order_desc',
        'site_comment_check',
    ];

    /**
     * @param mixed $value
     * @return int
     */
    public function getValueAttribute(mixed $value): mixed
    {
        if (in_array($this->key, $this->keysOfBoolValue)) {
            return (bool) $value;
        }

        if (is_numeric($value)) {
            return (int) $value;
        }

        return $value;
    }
}
