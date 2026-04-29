<?php

declare(strict_types=1);

namespace Modules\Inventory\Infrastructure\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Inventory\Database\Factories\ProductFactory;

/**
 * @property int $id
 * @property string $name
 * @property string|null $category
 * @property string $sku
 * @property int $reorder_point
 */
final class Product extends Model
{
    use HasFactory;

    protected $table = 'inventory_products';

    protected $fillable = [
        'name',
        'category',
        'sku',
        'reorder_point',
    ];

    /**
     * @return HasMany<Lot, $this>
     */
    public function lots(): HasMany
    {
        return $this->hasMany(Lot::class, 'product_id');
    }

    /**
     * @return HasOne<StockLevel, $this>
     */
    public function stockLevel(): HasOne
    {
        return $this->hasOne(StockLevel::class, 'product_id');
    }

    protected static function newFactory(): ProductFactory
    {
        return ProductFactory::new();
    }
}
