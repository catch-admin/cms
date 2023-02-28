<?php

declare(strict_types=1);

namespace Modules\Cms\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PostHasTags extends Pivot
{
    //
    protected $table = 'cms_post_has_tags';
}
