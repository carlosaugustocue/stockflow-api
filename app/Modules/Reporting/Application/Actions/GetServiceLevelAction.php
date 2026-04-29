<?php

declare(strict_types=1);

namespace Modules\Reporting\Application\Actions;

use Illuminate\Http\Request;
use Modules\Dispatch\Infrastructure\Models\DispatchOrder;
use Modules\Inventory\Infrastructure\Models\Lot;
use Modules\Inventory\Infrastructure\Models\Product;

final class GetServiceLevelAction
{
    /**
     * @return array<string, float|int>
     */
    public function __invoke(Request $request): array
    {
        $query = DispatchOrder::query()->with('picks')->where('status', 'confirmed');

        if ($request->filled('from')) {
            $query->whereDate('confirmed_at', '>=', (string) $request->string('from'));
        }
        if ($request->filled('to')) {
            $query->whereDate('confirmed_at', '<=', (string) $request->string('to'));
        }

        if ($request->filled('category')) {
            $category = (string) $request->string('category');
            $productIds = Product::query()->where('category', $category)->pluck('id');
            $query->whereIn('product_id', $productIds);
        }

        if ($request->filled('zone')) {
            $zone = (string) $request->string('zone');
            $productIdsInZone = Lot::query()
                ->whereHas('location', function ($q) use ($zone): void {
                    $q->where('code', 'like', $zone.'%')
                        ->orWhere('name', 'like', '%'.$zone.'%');
                })
                ->pluck('product_id')
                ->unique();
            $query->whereIn('product_id', $productIdsInZone);
        }

        $orders = $query->get();
        $total = $orders->count();

        $complete = $orders->filter(function (DispatchOrder $order): bool {
            return (int) $order->picks->sum('picked_quantity') >= (int) $order->quantity;
        })->count();

        $onTime = $orders->filter(function (DispatchOrder $order): bool {
            if (! $order->expected_dispatch_at || ! $order->confirmed_at) {
                return false;
            }

            return $order->confirmed_at->lessThanOrEqualTo($order->expected_dispatch_at);
        })->count();

        return [
            'total_confirmed_orders' => $total,
            'complete_orders' => $complete,
            'on_time_orders' => $onTime,
            'complete_rate_percent' => $total > 0 ? round(($complete / $total) * 100, 2) : 0.0,
            'on_time_rate_percent' => $total > 0 ? round(($onTime / $total) * 100, 2) : 0.0,
            'service_level_percent' => $total > 0 ? round((min($complete, $onTime) / $total) * 100, 2) : 0.0,
        ];
    }
}
