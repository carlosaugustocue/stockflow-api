<?php

declare(strict_types=1);

namespace Modules\Dispatch\Application\Actions;

use Illuminate\Support\Facades\Event;
use Modules\Dispatch\Domain\Events\DispatchConfirmed;
use Modules\Dispatch\Infrastructure\Models\DispatchOrder;
use Modules\Inventory\Infrastructure\Models\Lot;
use Modules\Inventory\Infrastructure\Models\StockLevel;
use RuntimeException;

final class ConfirmDispatchAction
{
    public function __invoke(int $dispatchOrderId): DispatchOrder
    {
        $order = DispatchOrder::query()->with('picks')->findOrFail($dispatchOrderId);

        if ($order->status !== 'picked') {
            throw new RuntimeException('La orden debe estar en estado picked para confirmar despacho.');
        }

        foreach ($order->picks as $pick) {
            $lot = Lot::query()->findOrFail($pick->inventory_lot_id);
            $lot->quantity -= (int) $pick->picked_quantity;

            if ($lot->quantity < 0) {
                throw new RuntimeException('Inconsistencia detectada: lote con cantidad negativa.');
            }

            $lot->save();
        }

        $stock = StockLevel::query()->where('product_id', $order->product_id)->firstOrFail();
        $stock->quantity -= (int) $order->quantity;

        if ($stock->quantity < 0) {
            throw new RuntimeException('Inconsistencia detectada: stock global negativo.');
        }

        $stock->save();

        $order->status = 'confirmed';
        $order->confirmed_at = now();
        $order->save();

        Event::dispatch(new DispatchConfirmed(
            dispatchOrderId: $order->id,
            productId: (int) $order->product_id,
            quantity: (int) $order->quantity,
        ));

        return $order->fresh(['picks']);
    }
}
