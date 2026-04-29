<?php

declare(strict_types=1);

namespace Modules\Receiving\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class ReceiptLotLink extends Model
{
    protected $table = 'receiving_receipt_lot_links';

    protected $fillable = [
        'receipt_id',
        'product_id',
        'lot_number',
        'expires_at',
        'quantity',
        'location_id',
    ];

    protected $casts = [
        'expires_at' => 'date',
    ];

    public function receipt(): BelongsTo
    {
        return $this->belongsTo(Receipt::class, 'receipt_id');
    }
}
