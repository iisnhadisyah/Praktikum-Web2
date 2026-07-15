<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest; 
use Illuminate\Http\JsonResponse;

class ItemController extends Controller
{
    public function index(): JsonResponse
    {
        // Menggunakan array data tiruan langsung agar tidak error database
        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil data items (Admin Mode)',
            'data'    => [
                [
                    'id' => 1,
                    'name' => 'Item Contoh A',
                    'price' => 15000
                ]
            ]
        ], 200);
    }

    public function store(StoreItemRequest $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Validasi sukses!',
            'data'    => $request->validated()
        ], 201);
    }

    // Tambahkan fungsi destroy di bawah ini untuk menangani request DELETE
    public function destroy($id): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Item dengan ID ' . $id . ' berhasil dihapus! (Admin Mode)'
        ], 200);
    }
}