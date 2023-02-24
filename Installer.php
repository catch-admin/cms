<?php

namespace Modules\Cms;

use Catch\Support\Module\Installer as ModuleInstaller;
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

    protected function requirePackages(): void
    {
        // TODO: Implement requirePackages() method.
    }

    protected function removePackages(): void
    {
        // TODO: Implement removePackages() method.
    }
}
