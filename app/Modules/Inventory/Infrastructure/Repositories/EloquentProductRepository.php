<?php

declare(strict_types=1);

namespace Modules\Inventory\Infrastructure\Repositories;

use Illuminate\Contracts\Pagination\CursorPaginator;
use Illuminate\Support\Collection;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Models\StockLevel;

final class EloquentProductRepository
{
    public function create(string $name, string $sku, int $reorderPoint): Product
    {
        $product = Product::query()->create([
            'name' => $name,
            'sku' => $sku,
            'reorder_point' => $reorderPoint,
        ]);

        StockLevel::query()->create([
            'product_id' => $product->id,
            'quantity' => 0,
        ]);

        return $product->fresh(['stockLevel']);
    }

    public function findOrFail(int $productId): Product
    {
        return Product::query()->with(['stockLevel'])->findOrFail($productId);
    }

    public function save(Product $product): Product
    {
        $product->save();

        return $product->fresh(['stockLevel']);
    }

    public function cursorPaginate(int $perPage = 15): CursorPaginator
    {
        return Product::query()
            ->with('stockLevel')
            ->orderBy('id')
            ->cursorPaginate($perPage);
    }

    public function belowReorderPoint(): Collection
    {
        return Product::query()
            ->with('stockLevel')
            ->whereHas('stockLevel', function ($query): void {
                $query->whereColumn('quantity', '<=', 'inventory_products.reorder_point');
            })
            ->orderBy('id')
            ->get();
    }
}
