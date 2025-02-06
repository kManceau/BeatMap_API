<?php

namespace App\Http\Requests\Places;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlaceFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string',
            'description' => 'string',
            'address' => 'string',
            'city' => 'string',
            'state' => 'string',
            'zip' => 'string',
            'country' => 'string',
            'latitude' => 'numeric',
            'longitude' => 'numeric',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:32768',
            'user_id' => 'integer|exists:users,id'
        ];
    }
}
