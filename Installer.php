<?php

namespace Modules\Cms;

use Catch\Support\Module\Installer as ModuleInstaller;
use Illuminate\Support\Facades\Artisan;
use Modules\Cms\Providers\CmsServiceProvider;

class Installer extends ModuleInstaller
{
    protected function info(): array
    {
        // TODO: Implement info() method.
        return [
            'title' => '内容管理',
            'name' => 'cms',
            'path' => 'cms',
            'keywords' => '内容管理, cms',
            'description' => '内容管理模块',
            'provider' => CmsServiceProvider::class
        ];
    }

    public function install(): void
    {
        parent::install();

        Artisan::call('vendor:publish', [
            '--tag' => 'cms-views',
        ]);
    }

    protected function requirePackages(): void
    {
        // TODO: Implement requirePackages() method.
    }

    protected function removePackages(): void
    {
        // TODO: Implement removePackages() method.
    }
}
