<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Api\ProductController;

Route::apiResource('produk', ProductController::class)->only(['index', 'show', 'store']);
// Route::get('/produk', [ProdukController::class, 'index']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return response()->json(['message' => 'API works!']);
});


// Route::get('/produk', [ProdukController::class, 'index']);

// Route::get('/produk', [ProdukController::class, 'index']);
// Route::post('/produk', [ProdukController::class, 'store']);
// Route::get('/produk/{id}', [ProdukController::class, 'show']);
// Route::put('/produk/{id}', [ProdukController::class, 'update']);
// Route::delete('/produk/{id}', [ProdukController::class, 'destroy']);

