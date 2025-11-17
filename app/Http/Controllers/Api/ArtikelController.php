<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArticlePreviewService;

class ArtikelController extends Controller
{
    public function preview(Request $request)
    {
        $service = new ArticlePreviewService();
        $meta = $service->fetchMeta($request->url);

        return response()->json([
            'data' => $meta
        ]);
    }
}
