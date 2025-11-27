<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Services\ArticlePreviewService;

class ArtikelController extends Controller
{
    public function index()
    {
        return Artikel::latest()->paginate(10);
    }

    public function show($id)
    {
        return Artikel::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'judul' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'thumbnail' => 'nullable|string',
            'sumber' => 'nullable|string'
        ]);

        try {
            $artikel = Artikel::create($request->only([
                'judul', 'url', 'thumbnail', 'deskripsi', 'sumber'
            ]));

            return response()->json($artikel, 201);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'url' => 'required|url',
            'judul' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'thumbnail' => 'nullable|string',
            'sumber' => 'nullable|string'
        ]);

        try {
            $artikel = Artikel::findOrFail($id);
            $artikel->update($request->only(['judul','url','thumbnail','deskripsi','sumber']));

            return response()->json($artikel, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Gagal mengupdate artikel: '.$e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $artikel = Artikel::findOrFail($id);
            $artikel->delete();

            return response()->json(['message' => 'Artikel berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Gagal menghapus artikel: '.$e->getMessage()
            ], 500);
        }
    }

    public function preview(Request $request)
    {
        $request->validate(['url' => 'required|url']);

        try {
            $service = new ArticlePreviewService();
            $meta = $service->fetchMeta($request->url);

            return response()->json([
                'data' => $meta
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Gagal fetch preview: '.$e->getMessage()
            ], 500);
        }
    }
}
