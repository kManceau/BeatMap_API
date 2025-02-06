<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventFormRequest extends FormRequest
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
            'name' => 'required|string',
            'type' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:32768',
            'user_id' => 'required|integer|exists:users,id',
            'place_id' => 'required|integer|exists:places,id',
        ];
    }
}
