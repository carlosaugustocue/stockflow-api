<?php

declare(strict_types=1);

namespace Modules\Dispatch\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class CreateDispatchOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'order_reference' => ['required', 'string', 'max:100'],
            'client_name' => ['nullable', 'string', 'max:150'],
            'product_id' => ['required', 'integer', 'exists:inventory_products,id'],
            'quantity' => ['required', 'integer', 'min:1'],
            'expected_dispatch_at' => ['nullable', 'date'],
        ];
    }
}
