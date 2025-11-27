<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Tampilkan semua kategori
     */
    public function index()
    {
        $kategori = Kategori::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar semua kategori',
            'data' => $kategori
        ]);
    }

    /**
     * Tambah kategori baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $kategori = Kategori::create([
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil ditambahkan!',
            'data' => $kategori
        ], 201);
    }

    /**
     * Lihat detail kategori berdasarkan id
     */
    public function show($id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return response()->json([
                'success' => false,
                'message' => 'Kategori tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail kategori',
            'data' => $kategori
        ]);
    }

    /**
     * Update kategori
     */

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return response()->json([
                'success' => false,
                'message' => 'Kategori tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $kategori->update([
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil diperbarui!',
            'data' => $kategori
        ]);
    }

    /**
     * Hapus kategori
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return response()->json([
                'success' => false,
                'message' => 'Kategori tidak ditemukan'
            ], 404);
        }

        $kategori->delete();

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil dihapus'
        ]);
    }
}
