<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Inventory\Http\Controllers\InventoryController;

Route::prefix('api/v1/inventory')->group(function (): void {
    Route::middleware(['auth:sanctum', 'role:admin,warehouse_manager'])->group(function (): void {
        Route::get('/products', [InventoryController::class, 'index']);
        Route::post('/products', [InventoryController::class, 'store']);
        Route::get('/products/below-reorder-point', [InventoryController::class, 'belowReorderPoint']);
        Route::get('/products/{productId}', [InventoryController::class, 'show']);
        Route::patch('/products/{productId}/stock', [InventoryController::class, 'adjustStock']);
    });
});
