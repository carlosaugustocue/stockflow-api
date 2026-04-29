<?php

declare(strict_types=1);

namespace Modules\Dispatch\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $dispatch_order_id
 * @property int $inventory_lot_id
 * @property int $picked_quantity
 */
final class DispatchPick extends Model
{
    protected $table = 'dispatch_picks';

    protected $fillable = [
        'dispatch_order_id',
        'inventory_lot_id',
        'picked_quantity',
    ];

    /**
     * @return BelongsTo<DispatchOrder, $this>
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(DispatchOrder::class, 'dispatch_order_id');
    }
}
