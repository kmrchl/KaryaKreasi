<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ProductController;


Route::get('/produk', [ProductController::class, 'index']);
Route::post('/produk', [ProductController::class, 'store']);
Route::get('/produk/{id_produk}', [ProductController::class, 'show']);
Route::put('/produk/{id_produk}', [ProductController::class, 'update']);
Route::delete('/produk/{id_produk}', [ProductController::class, 'destroy']);


// route login (tidak perlu auth)
Route::post('/login', [AuthController::class, 'login']);

//Kategori
Route::apiResource('kategori', KategoriController::class);


// Artikel

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::post('/artikel', [ArtikelController::class, 'store']);
Route::get('/artikel/{id}', [ArtikelController::class, 'show']);
Route::put('/artikel/{id}', [ArtikelController::class, 'update']);
Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy']);
Route::post('/artikel/preview', [ArtikelController::class, 'preview']);


