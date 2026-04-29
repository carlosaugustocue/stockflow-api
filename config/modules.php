<?php

declare(strict_types=1);
use Modules\Auth\AuthServiceProvider;
use Modules\Dispatch\DispatchServiceProvider;
use Modules\Inventory\InventoryServiceProvider;
use Modules\Receiving\ReceivingServiceProvider;
use Modules\Reporting\ReportingServiceProvider;
use Modules\Shared\SharedServiceProvider;

return [
    'enabled' => [
        AuthServiceProvider::class,
        InventoryServiceProvider::class,
        ReceivingServiceProvider::class,
        DispatchServiceProvider::class,
        ReportingServiceProvider::class,
        SharedServiceProvider::class,
    ],
];
