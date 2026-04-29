<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Receiving\Http\Controllers\ReceivingController;

Route::prefix('api/v1/receiving')->group(function (): void {
    Route::middleware(['auth:sanctum', 'role:admin,warehouse_manager,receiving_operator'])->group(function (): void {
        Route::post('/receipts', [ReceivingController::class, 'registerReceipt']);
        Route::post('/receipts/{receiptId}/lots', [ReceivingController::class, 'linkLotToReceipt']);
    });
});
