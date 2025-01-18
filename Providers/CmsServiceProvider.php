<?php

namespace Modules\Cms\Providers;

use Catch\CatchAdmin;
use Catch\Providers\CatchModuleServiceProvider;

class CmsServiceProvider extends CatchModuleServiceProvider
{
    /**
     * route path
     *
     * @return string
     */
    public function moduleName(): string
    {
        // TODO: Implement path() method.
        return 'Cms';
    }

    public function boot(): void
    {
        $frontViewPath = config('catch.views_path');

        // 发布 cms view
        $this->publishes([
            dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' => $frontViewPath . 'cms',
        ], 'cms-views');
    }
}
