<?php

declare(strict_types=1);

namespace Modules\Reporting;

use Illuminate\Support\Facades\Event;
use Modules\Inventory\Domain\Events\StockAdjusted;
use Modules\Reporting\Infrastructure\Listeners\UpdateInventoryMetricsOnStockAdjusted;
use Modules\Shared\Providers\BaseModuleServiceProvider;

class ReportingServiceProvider extends BaseModuleServiceProvider
{
    protected string $moduleName = 'Reporting';

    public function boot(): void
    {
        $this->loadModuleMigrations();
        $this->loadModuleRoutes();

        Event::listen(
            StockAdjusted::class,
            UpdateInventoryMetricsOnStockAdjusted::class,
        );
    }
}
