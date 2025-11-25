<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProductResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProductController extends Controller

{
    // GET /api/products
    public function index(Request $request)
    {
        $query = Produk::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('produk', 'like', '%'.$request->search.'%');
        }

        return ProductResource::collection($query->latest()->get());
    }

    // GET /api/products/{produk}
    public function show($id_produk)
    {
        $produk = Produk::find($id_produk);

        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        return new ProductResource($produk);
    }

    // POST /api/products
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_kategori' => 'required|exists:kategori,id_kategori',
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

    public function find($id_produk)
    {
        $produk = Produk::find($id_produk);
        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        return response()->json(['data' => $produk], 200);
    }


    public function update(Request $request, $id_produk)
    {
        // Ambil produk
        $produk = Produk::find($id_produk);
        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        // Validasi
        $validated = $request->validate([
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'produk'      => 'required|string|max:255',
            'deskripsi'   => 'nullable|string',
            'harga'       => 'required|numeric|min:0',
            'gambar'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update field biasa
        $produk->id_kategori = $validated['id_kategori'];
        $produk->produk      = $validated['produk'];
        $produk->deskripsi   = $validated['deskripsi'] ?? $produk->deskripsi;
        $produk->harga       = $validated['harga'];

        // Update gambar jika dikirim
        if ($request->hasFile('gambar')) {

        // hapus lama
        if ($produk->gambar && file_exists(public_path('storage/' . $produk->gambar))) {
            unlink(public_path('storage/' . $produk->gambar));
        }

        // upload baru
        $path = $request->file('gambar')->store('produk', 'public');
        $produk->gambar = $path;
    }


        // Save perubahan
        $produk->save();

        return response()->json([
            'message' => 'Produk berhasil diupdate',
            'data' => $produk
        ], 200);
    }

    public function destroy($id_produk)
    {
        $produk = Produk::find($id_produk);

        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        // Hapus gambar lama kalau ada
        if ($produk->gambar && file_exists(public_path('storage/' . $produk->gambar))) {
            unlink(public_path('storage/' . $produk->gambar));
        }

        // Hapus row dari database
        $produk->delete();

        return response()->json([
            'message' => 'Produk berhasil dihapus'
        ], 200);
    }



}
