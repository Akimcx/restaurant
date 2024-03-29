<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
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
            'name' => ['required', 'unique:dishes'],
            'price' => ['required', 'numeric', 'gt:0'],
            'img' => ['required', 'image'],
            'description' => ['required'],
            'restaurant_id' => ['required', 'exists:restaurants,id']
        ];
    }
}
