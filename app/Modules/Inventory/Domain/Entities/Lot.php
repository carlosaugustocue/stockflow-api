<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\Entities;

use Carbon\CarbonImmutable;
use Modules\Inventory\Domain\ValueObjects\LotNumber;
use Modules\Inventory\Domain\ValueObjects\Quantity;

final readonly class Lot
{
    public function __construct(
        public LotNumber $lotNumber,
        public CarbonImmutable $expiresAt,
        public Quantity $quantity,
    ) {}
}
