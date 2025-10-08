<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\ProductResource;
use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET /api/products
    public function index()
    {
        return ProductResource::collection(Produk::latest()->get());
    }

    // GET /api/products/{produk}
    public function show(Produk $produk)
    {
        return new ProductResource($produk);
    }

    // POST /api/products
    public function store(Request $request)
    {
        $validated = $request->validate([
            'produk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048', // 2MB
        ]);

        if ($request->hasFile('gambar')) {
            // simpan di storage/app/public/produk
            $path = $request->file('gambar')->store('produk', 'public');
            $validated['gambar'] = $path;
        }

        $produk = Produk::create($validated);

        return new ProductResource($produk);
    }

}
