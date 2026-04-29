<?php

declare(strict_types=1);

namespace Modules\Reporting\Application\Actions;

use Illuminate\Support\Facades\DB;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Models\StockLevel;

final class GetInventoryRotationByCategoryAction
{
    /**
     * @return array<int, array<string, int|float|string>>
     */
    public function __invoke(): array
    {
        $categories = DB::table('inventory_products')
            ->selectRaw("COALESCE(category, 'Sin categoría') as category")
            ->selectRaw('COUNT(*) as total_products')
            ->groupBy('category')
            ->get();

        $results = [];

        foreach ($categories as $row) {
            $category = (string) $row->category;
            $productIds = Product::query()
                ->where(function ($query) use ($category): void {
                    if ($category === 'Sin categoría') {
                        $query->whereNull('category');
                    } else {
                        $query->where('category', $category);
                    }
                })
                ->pluck('id');

            $totalStock = (int) StockLevel::query()
                ->whereIn('product_id', $productIds)
                ->sum('quantity');

            $belowReorder = Product::query()
                ->whereIn('id', $productIds)
                ->whereHas('stockLevel', function ($q): void {
                    $q->whereColumn('quantity', '<=', 'inventory_products.reorder_point');
                })
                ->count();

            $results[] = [
                'category' => $category,
                'total_products' => (int) $row->total_products,
                'total_stock' => $totalStock,
                'low_rotation_products' => $belowReorder,
                'rotation_index' => $totalStock > 0 ? round(((int) $row->total_products - $belowReorder) / $totalStock, 4) : 0.0,
                'trend' => $belowReorder > 0 ? 'decreasing' : 'stable',
            ];
        }

        return $results;
    }
}
