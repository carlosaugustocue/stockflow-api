<?php

declare(strict_types=1);

namespace Modules\Reporting\Application\Actions;

use Modules\Dispatch\Infrastructure\Models\DispatchOrder;
use Modules\Inventory\Infrastructure\Models\Lot;
use Modules\Inventory\Infrastructure\Models\Product;

final class GetOperationalAlertsAction
{
    /**
     * @return array<string, array<int, array<string, mixed>>>
     */
    public function __invoke(): array
    {
        $expiringSoon = Lot::query()
            ->with('product')
            ->where('quantity', '>', 0)
            ->whereDate('expires_at', '<=', now()->addDays(30)->toDateString())
            ->orderBy('expires_at')
            ->limit(20)
            ->get()
            ->map(fn (Lot $lot): array => [
                'lot_number' => $lot->lot_number,
                'product_id' => $lot->product_id,
                'product_name' => optional($lot->product)->name,
                'expires_at' => optional($lot->expires_at)->toDateString(),
                'quantity' => (int) $lot->quantity,
            ])
            ->values()
            ->all();

        $belowReorder = Product::query()
            ->with('stockLevel')
            ->whereHas('stockLevel', function ($query): void {
                $query->whereColumn('quantity', '<=', 'inventory_products.reorder_point');
            })
            ->orderBy('id')
            ->limit(20)
            ->get()
            ->map(fn (Product $product): array => [
                'product_id' => $product->id,
                'sku' => $product->sku,
                'name' => $product->name,
                'current_stock' => (int) ($product->stockLevel->quantity ?? 0),
                'reorder_point' => (int) $product->reorder_point,
            ])
            ->values()
            ->all();

        $pendingDispatch = DispatchOrder::query()
            ->whereIn('status', ['pending', 'picked'])
            ->orderBy('id')
            ->limit(20)
            ->get()
            ->map(fn (DispatchOrder $order): array => [
                'dispatch_order_id' => $order->id,
                'order_reference' => $order->order_reference,
                'product_id' => (int) $order->product_id,
                'quantity' => (int) $order->quantity,
                'status' => $order->status,
            ])
            ->values()
            ->all();

        $overdueDispatch = DispatchOrder::query()
            ->whereIn('status', ['pending', 'picked'])
            ->whereNotNull('expected_dispatch_at')
            ->where('expected_dispatch_at', '<', now())
            ->orderBy('expected_dispatch_at')
            ->limit(20)
            ->get()
            ->map(fn (DispatchOrder $order): array => [
                'dispatch_order_id' => $order->id,
                'order_reference' => $order->order_reference,
                'client_name' => $order->client_name,
                'expected_dispatch_at' => optional($order->expected_dispatch_at)->toISOString(),
                'status' => $order->status,
            ])
            ->values()
            ->all();

        return [
            'expiring_soon' => $expiringSoon,
            'below_reorder_point' => $belowReorder,
            'pending_dispatch' => $pendingDispatch,
            'overdue_dispatch' => $overdueDispatch,
        ];
    }
}
