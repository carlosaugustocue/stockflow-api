<?php

declare(strict_types=1);

namespace Modules\Dispatch\Domain\Events;

final readonly class DispatchConfirmed
{
    public function __construct(
        public int $dispatchOrderId,
        public int $productId,
        public int $quantity,
    ) {}
}
