<?php

declare(strict_types=1);

namespace Modules\Inventory\Application\Actions;

use Illuminate\Support\Facades\Event;
use Modules\Inventory\Application\DTOs\AdjustStockData;
use Modules\Inventory\Domain\Entities\StockLevel as DomainStockLevel;
use Modules\Inventory\Domain\Events\ReorderPointReached;
use Modules\Inventory\Domain\Events\StockAdjusted;
use Modules\Inventory\Domain\ValueObjects\Quantity;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Repositories\EloquentProductRepository;

final class AdjustStockAction
{
    public function __construct(
        private readonly EloquentProductRepository $repository,
    ) {}

    public function __invoke(AdjustStockData $data): Product
    {
        $product = $this->repository->findOrFail($data->productId);
        $stock = new DomainStockLevel(new Quantity((int) $product->stockLevel->quantity));
        $adjustment = new Quantity($data->quantity);

        if ($data->operation === 'add') {
            $stock->increase($adjustment);
        } else {
            $stock->decrease($adjustment);
        }

        $product->stockLevel->quantity = $stock->quantity()->value;
        $product->stockLevel->save();
        $saved = $this->repository->save($product);

        Event::dispatch(new StockAdjusted(
            productId: $saved->id,
            newQuantity: (int) $saved->stockLevel->quantity,
            reason: $data->reason,
        ));

        if ((int) $saved->stockLevel->quantity <= (int) $saved->reorder_point) {
            Event::dispatch(new ReorderPointReached(
                productId: $saved->id,
                currentQuantity: (int) $saved->stockLevel->quantity,
                reorderPoint: (int) $saved->reorder_point,
            ));
        }

        return $saved;
    }
}
