<?php

declare(strict_types=1);

namespace Modules\Receiving\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class LinkLotToReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'product_id' => ['required', 'integer', 'exists:inventory_products,id'],
            'lot_number' => ['required', 'string', 'max:40'],
            'expires_at' => ['required', 'date', 'after:today'],
            'quantity' => ['required', 'integer', 'min:1'],
            'location_id' => ['nullable', 'integer', 'exists:inventory_locations,id'],
        ];
    }
}
