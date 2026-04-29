<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Dispatch\Http\Controllers\DispatchController;

Route::prefix('api/v1/dispatch')->group(function (): void {
    Route::middleware(['auth:sanctum', 'role:admin,warehouse_manager,dispatch_operator'])->group(function (): void {
        Route::post('/orders', [DispatchController::class, 'createOrder']);
        Route::post('/orders/{dispatchOrderId}/pick-fefo', [DispatchController::class, 'pickFefo']);
        Route::post('/orders/{dispatchOrderId}/confirm', [DispatchController::class, 'confirm']);
    });
});
