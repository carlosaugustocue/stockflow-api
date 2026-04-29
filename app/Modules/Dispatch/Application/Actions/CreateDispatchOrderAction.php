<?php

declare(strict_types=1);

namespace Modules\Dispatch\Application\Actions;

use Modules\Dispatch\Application\DTOs\CreateDispatchOrderData;
use Modules\Dispatch\Infrastructure\Models\DispatchOrder;
use Modules\Inventory\Infrastructure\Models\StockLevel;
use RuntimeException;

final class CreateDispatchOrderAction
{
    public function __invoke(CreateDispatchOrderData $data): DispatchOrder
    {
        $stock = StockLevel::query()->where('product_id', $data->productId)->first();

        if (! $stock || $stock->quantity < $data->quantity) {
            throw new RuntimeException('Stock insuficiente para crear la orden de despacho.');
        }

        return DispatchOrder::query()->create([
            'order_reference' => $data->orderReference,
            'client_name' => $data->clientName,
            'product_id' => $data->productId,
            'quantity' => $data->quantity,
            'status' => 'pending',
            'expected_dispatch_at' => $data->expectedDispatchAt,
        ]);
    }
}
