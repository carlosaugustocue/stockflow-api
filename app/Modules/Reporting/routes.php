<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Reporting\Http\Controllers\ReportingController;

Route::prefix('api/v1/reporting')->group(function (): void {
    Route::middleware(['auth:sanctum', 'role:admin,warehouse_manager'])->group(function (): void {
        Route::get('/inventory-metrics', [ReportingController::class, 'inventoryMetrics']);
        Route::get('/summary', [ReportingController::class, 'summary']);
        Route::get('/alerts', [ReportingController::class, 'alerts']);
        Route::get('/warehouse-utilization', [ReportingController::class, 'warehouseUtilization']);
        Route::get('/service-level', [ReportingController::class, 'serviceLevel']);
        Route::get('/inventory-rotation', [ReportingController::class, 'inventoryRotation']);
        Route::get('/accuracy', [ReportingController::class, 'accuracy']);
        Route::get('/inventory-metrics/export/pdf', [ReportingController::class, 'exportMetricsPdf']);
        Route::get('/inventory-metrics/export/excel', [ReportingController::class, 'exportMetricsExcel']);
    });
});
