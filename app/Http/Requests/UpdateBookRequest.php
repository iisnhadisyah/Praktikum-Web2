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
        // 'sometimes' = divalidasi HANYA kalau field-nya dikirim.
        'category_id'  => ['sometimes', 'integer', 'exists:categories,id'],
        'title'        => ['sometimes', 'string', 'max:255'],
        'writer'       => ['sometimes', 'string', 'max:255'],
        'release_date' => ['sometimes', 'date'],
    ];
    }
}
