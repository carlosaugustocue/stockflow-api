<?php

declare(strict_types=1);

namespace Modules\Reporting\Application\Actions;

use Modules\Inventory\Infrastructure\Models\Product;

final class GetInventoryAccuracyAction
{
    /**
     * @return array<string, int|float>
     */
    public function __invoke(): array
    {
        $products = Product::query()->with('stockLevel')->get();
        $total = $products->count();

        $accurate = $products->filter(function (Product $product): bool {
            $theoretical = (int) ($product->lots()->sum('quantity'));
            $recorded = (int) ($product->stockLevel->quantity ?? 0);

            return $theoretical === $recorded;
        })->count();

        return [
            'total_products_evaluated' => $total,
            'accurate_products' => $accurate,
            'accuracy_percent' => $total > 0 ? round(($accurate / $total) * 100, 2) : 100.0,
        ];
    }
}
