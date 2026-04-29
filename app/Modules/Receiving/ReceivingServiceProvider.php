<?php

declare(strict_types=1);

namespace Modules\Receiving;

use Modules\Shared\Providers\BaseModuleServiceProvider;

class ReceivingServiceProvider extends BaseModuleServiceProvider
{
    protected string $moduleName = 'Receiving';

    public function boot(): void
    {
        $this->loadModuleMigrations();
        $this->loadModuleRoutes();
    }
}
