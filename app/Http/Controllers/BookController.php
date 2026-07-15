<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $category = Book::all();

        return response()->json([
            'status' => "Suksesssss",
            'data' => BookResource::collection($category),
            'message' => "berhasil ambil semua data",
        ]);
    }

}
