<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_name' => 'required|string|max:255',
            'category_description' => 'nullable|string|max:1000',
            'priority' => 'required|integer|min:1',
            'category_status' => 'required|boolean',
            'category_id' => 'required|exists:categories,id_category',
            'barcode' => 'nullable|string|max:50',
        ];
    }
}
