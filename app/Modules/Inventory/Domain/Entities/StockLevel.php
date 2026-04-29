<?php

declare(strict_types=1);

namespace Modules\Inventory\Domain\Entities;

use Modules\Inventory\Domain\ValueObjects\Quantity;
use RuntimeException;

final class StockLevel
{
    public function __construct(
        private Quantity $quantity,
    ) {}

    public function increase(Quantity $quantity): void
    {
        $this->quantity = new Quantity($this->quantity->value + $quantity->value);
    }

    public function decrease(Quantity $quantity): void
    {
        $newValue = $this->quantity->value - $quantity->value;

        if ($newValue < 0) {
            throw new RuntimeException('El stock no puede quedar negativo.');
        }

        $this->quantity = new Quantity($newValue);
    }

    public function quantity(): Quantity
    {
        return $this->quantity;
    }
}
