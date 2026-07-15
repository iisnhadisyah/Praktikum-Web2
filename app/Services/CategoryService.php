<?php

namespace App\Services;

class CategoryService
{
    /**
     * Logika bisnis untuk memproses data kategori sebelum disimpan
     */
    public function handleCategoryData(array $data): array
    {
        // Logika bisnis: mengubah input nama kategori menjadi huruf kapital semua (UPPERCASE)
        $data['name'] = strtoupper($data['name']);
        
        return $data;
    }
}