<?php

declare(strict_types=1);

namespace Modules\Receiving\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class RegisterReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'supplier_reference' => ['required', 'string', 'max:100'],
            'received_at' => ['required', 'date'],
            'notes' => ['nullable', 'string', 'max:500'],
        ];
    }
}
