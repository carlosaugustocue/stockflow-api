<?php

declare(strict_types=1);

namespace Modules\Reporting\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;

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
}
