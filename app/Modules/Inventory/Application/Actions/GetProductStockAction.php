<?php

declare(strict_types=1);

namespace Modules\Inventory\Application\Actions;

use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Repositories\EloquentProductRepository;

final class GetProductStockAction
{
    public function __construct(
        private readonly EloquentProductRepository $repository,
    ) {}

    public function __invoke(int $productId): Product
    {
        return $this->repository->findOrFail($productId);
    }
}
