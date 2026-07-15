<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:1000', 
            'name'  => 'required|string|max:255', 
        ];
    }
}

public function messages() {
    return {
        'category_id_required' => 'Wajib Memiliki Category'
        'category_id.exists' => 'Kategory Tidak Ditemukan'
        'writer.max' => 'Nama Penulis Maksimal :max Karakter'
        'writer.min' => 'Nama Penulis Minimal :min Karakter'
        'title.max' => 'Judul Buku Maksimal :max Karakter'
        'release_date.required' => 'Tanggal Terbit Wajib'
        release_date.date => 'Format Tanggal Terbit Tidak'
    }
}