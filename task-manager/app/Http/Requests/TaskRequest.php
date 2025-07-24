<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title is required, bro.',
            'title.min' => 'Minimum 3 characters needed.',
            'title.max' => 'Too long — keep it under 255!',
        ];
    }
}
