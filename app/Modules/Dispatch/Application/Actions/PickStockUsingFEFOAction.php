<?php

declare(strict_types=1);

namespace Modules\Dispatch\Application\Actions;

use Modules\Dispatch\Infrastructure\Models\DispatchOrder;
use Modules\Dispatch\Infrastructure\Models\DispatchPick;
use Modules\Inventory\Infrastructure\Models\Lot;
use RuntimeException;

final class PickStockUsingFEFOAction
{
    public function __invoke(int $dispatchOrderId): DispatchOrder
    {
        $order = DispatchOrder::query()->findOrFail($dispatchOrderId);

        if ($order->status !== 'pending') {
            throw new RuntimeException('Solo se puede hacer picking sobre órdenes pendientes.');
        }

        $remaining = (int) $order->quantity;
        $lots = Lot::query()
            ->where('product_id', $order->product_id)
            ->where('quantity', '>', 0)
            ->orderBy('expires_at')
            ->orderBy('id')
            ->get();

        foreach ($lots as $lot) {
            if ($remaining <= 0) {
                break;
            }

            $picked = min($remaining, (int) $lot->quantity);
            if ($picked <= 0) {
                continue;
            }

            DispatchPick::query()->create([
                'dispatch_order_id' => $order->id,
                'inventory_lot_id' => $lot->id,
                'picked_quantity' => $picked,
            ]);

            $remaining -= $picked;
        }

        if ($remaining > 0) {
            DispatchPick::query()->where('dispatch_order_id', $order->id)->delete();
            throw new RuntimeException('No fue posible completar el picking FEFO con el inventario disponible.');
        }

        $order->status = 'picked';
        $order->save();

        return $order->fresh(['picks']);
    }
}
