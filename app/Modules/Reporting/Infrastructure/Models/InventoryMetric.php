<?php

declare(strict_types=1);

namespace Modules\Reporting\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Modules\Inventory\Infrastructure\Models\Product;

/**
 * @property int $id
 * @property int $product_id
 * @property string $sku
 * @property string $product_name
 * @property int $current_stock
 * @property int $reorder_point
 * @property int $stock_gap
 * @property Carbon|null $updated_from_event_at
 */
final class InventoryMetric extends Model
{
    protected $table = 'inventory_metrics';

    protected $fillable = [
        'product_id',
        'sku',
        'product_name',
        'current_stock',
        'reorder_point',
        'stock_gap',
        'updated_from_event_at',
    ];

    protected $casts = [
        'updated_from_event_at' => 'datetime',
    ];

    /**
     * @return BelongsTo<Product, $this>
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
