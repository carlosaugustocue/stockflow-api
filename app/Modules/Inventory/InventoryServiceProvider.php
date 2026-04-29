<?php

declare(strict_types=1);

namespace Modules\Inventory;

use Illuminate\Support\Facades\Event;
use Modules\Inventory\Infrastructure\Listeners\SyncInventoryOnMerchandiseReceived;
use Modules\Receiving\Domain\Events\MerchandiseReceived;
use Modules\Shared\Providers\BaseModuleServiceProvider;

class InventoryServiceProvider extends BaseModuleServiceProvider
{
    protected string $moduleName = 'Inventory';

    public function boot(): void
    {
        $this->loadModuleMigrations();
        $this->loadModuleRoutes();

        Event::listen(
            MerchandiseReceived::class,
            SyncInventoryOnMerchandiseReceived::class,
        );
    }
}
