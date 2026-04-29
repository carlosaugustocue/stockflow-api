<?php

declare(strict_types=1);

namespace Modules\Shared;

use Modules\Shared\Providers\BaseModuleServiceProvider;

class SharedServiceProvider extends BaseModuleServiceProvider
{
    protected string $moduleName = 'Shared';

    public function boot(): void
    {
        $this->loadModuleMigrations();
        $this->loadModuleRoutes();
    }
}
