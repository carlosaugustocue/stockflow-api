<?php

declare(strict_types=1);

namespace Modules\Auth;

use Modules\Shared\Providers\BaseModuleServiceProvider;

class AuthServiceProvider extends BaseModuleServiceProvider
{
    protected string $moduleName = 'Auth';

    public function boot(): void
    {
        $this->loadModuleMigrations();
        $this->loadModuleRoutes();
    }
}
