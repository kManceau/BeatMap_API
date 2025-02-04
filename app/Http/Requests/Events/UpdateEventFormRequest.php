<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventFormRequest extends FormRequest
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
            'type' => 'string',
            'description' => 'string',
            'start_date' => 'date',
            'end_date' => 'date',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:32M',
            'user_id' => 'integer|exists:users,id',
            'place_id' => 'integer|exists:places,id',
        ];
    }
}
