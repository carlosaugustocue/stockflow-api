<?php

declare(strict_types=1);

namespace Modules\Dispatch;

use Modules\Shared\Providers\BaseModuleServiceProvider;

class DispatchServiceProvider extends BaseModuleServiceProvider
{
    protected string $moduleName = 'Dispatch';

    public function boot(): void
    {
        $this->loadModuleMigrations();
        $this->loadModuleRoutes();
    }
}
