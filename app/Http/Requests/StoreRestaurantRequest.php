<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRestaurantRequest extends FormRequest
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
            'name' => ['required'],
            'email' => ['required', 'email'],
            'url' => ['required', 'url'],
            'phone' => ['required', 'max:8', 'min:8'],
            'open_hours' => ['required'],
            'close_hours' => ['required'],
            'open_days' => ['required'],
            'address' => ['required'],
            'file' => ['image'],
            'category_id' => ['required', 'exists:categories,id']
        ];
    }
}
