<?php

declare(strict_types=1);

namespace Modules\Inventory\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        $productId = (int) $this->route('productId');

        return [
            'name' => ['sometimes', 'string', 'max:255'],
            'category' => ['sometimes', 'nullable', 'string', 'max:100'],
            'sku' => ['sometimes', 'string', 'max:32', 'unique:inventory_products,sku,'.$productId],
            'reorder_point' => ['sometimes', 'integer', 'min:0'],
        ];
    }
}
