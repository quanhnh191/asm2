<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100',
            'category_id' => 'required',
            'image' => 'required|file|mimes:jpeg,png,jpg,webp',
            'price' => 'required|numeric',
            'description' => 'required',
        ];
    }
}
