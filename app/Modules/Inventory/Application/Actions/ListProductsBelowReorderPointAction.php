<?php

declare(strict_types=1);

namespace Modules\Inventory\Application\Actions;

use Illuminate\Support\Collection;
use Modules\Inventory\Infrastructure\Repositories\EloquentProductRepository;

final class ListProductsBelowReorderPointAction
{
    public function __construct(
        private readonly EloquentProductRepository $repository,
    ) {}

    public function __invoke(): Collection
    {
        return $this->repository->belowReorderPoint();
    }
}
