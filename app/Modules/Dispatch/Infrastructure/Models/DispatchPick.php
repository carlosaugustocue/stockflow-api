<?php

declare(strict_types=1);

namespace Modules\Dispatch\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class DispatchPick extends Model
{
    protected $table = 'dispatch_picks';

    protected $fillable = [
        'dispatch_order_id',
        'inventory_lot_id',
        'picked_quantity',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(DispatchOrder::class, 'dispatch_order_id');
    }
}
