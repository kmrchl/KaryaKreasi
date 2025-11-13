<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ProductController;

Route::apiResource('produk', ProductController::class)->only(['index', 'show', 'store']);
// Route::get('/produk', [ProdukController::class, 'index']);

// Route::middleware('auth:sanctum')->group(function () {
//     // route yang cuma bisa diakses setelah login
//     Route::get('/dashboard', function () {
//         return response()->json(['message' => 'Welcome Admin!']);
//     });

//     // CRUD produk (aman)
//     Route::apiResource('products', ProductController::class);
    
//     // logout
//     Route::post('/logout', [AuthController::class, 'logout']);
// });

Route::get('/produk', [ProductController::class, 'index']);
Route::get('/produk/{produk}', [ProductController::class, 'show']);
Route::post('/produk', [ProductController::class, 'store']);

// route login (tidak perlu auth)
Route::post('/login', [AuthController::class, 'login']);


Route::apiResource('kategori', KategoriController::class);
