<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'title'=>'required|string|min:3|max:30',
            'ISBN' => 'required|integer|digits:13',
            'publishedYear' => 'required|integer|between:1990,2026',
            'pageCount' => 'required|integer|between:1,1000',
            'summary' => 'required|string|max:255',
            'price' => 'required|integer|between:10,20000',
            'stock' => 'required|integer|between:0,200',
            'categories' => 'required|exists:categories,id',
            'authors' => 'required|exists:authors,id',
        ];
    }
}
