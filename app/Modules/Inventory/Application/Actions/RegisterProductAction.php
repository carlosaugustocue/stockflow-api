<?php

declare(strict_types=1);

namespace Modules\Inventory\Application\Actions;

use Illuminate\Support\Facades\Event;
use Modules\Inventory\Application\DTOs\RegisterProductData;
use Modules\Inventory\Domain\Entities\Product as DomainProduct;
use Modules\Inventory\Domain\Events\ProductRegistered;
use Modules\Inventory\Domain\ValueObjects\ReorderPoint;
use Modules\Inventory\Domain\ValueObjects\Sku;
use Modules\Inventory\Infrastructure\Models\Product;
use Modules\Inventory\Infrastructure\Repositories\EloquentProductRepository;

final class RegisterProductAction
{
    public function __construct(
        private readonly EloquentProductRepository $repository,
    ) {}

    public function __invoke(RegisterProductData $data): Product
    {
        $domainProduct = new DomainProduct(
            name: $data->name,
            sku: new Sku($data->sku),
            reorderPoint: new ReorderPoint($data->reorderPoint),
        );

        $product = $this->repository->create(
            name: $domainProduct->name,
            category: $data->category,
            sku: $domainProduct->sku->value,
            reorderPoint: $domainProduct->reorderPoint->value,
        );

        Event::dispatch(new ProductRegistered(
            productId: $product->id,
            sku: $product->sku,
        ));

        return $product;
    }
}
