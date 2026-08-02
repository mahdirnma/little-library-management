<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAuthorRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstName'=>'required|string|min:3|max:30',
            'lastName'=>'required|string|min:3|max:30',
            'birthYear' => 'required|integer|between:1930,2026',
            'birthCountry' => 'required|string|alpha|min:2|max:30',
            'biography'=> 'required|string|max:255',
            'status'=>'required|integer|in:0,1'
        ];
    }
}
