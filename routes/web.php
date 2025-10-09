<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('Home'))->name('home');
Route::get('/catalog', fn() => Inertia::render('Catalog'))->name('catalog');
Route::get('/contact', fn() => Inertia::render('Contact'))->name('contact');

Route::get('/login', fn () => Inertia::render('Auth/Login'))->name('login');

// ✅ proteksi semua route admin di sini
Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/dashboard', fn() => Inertia::render('Dashboard/Index'))->name('admin.dashboard');
        Route::get('/produk', fn() => Inertia::render('Dashboard/Produk/Index'));
        Route::get('/produk/create', fn() => Inertia::render('Dashboard/Produk/Create'));
        Route::get('/produk/{id}/edit', fn() => Inertia::render('Dashboard/Produk/Edit'));
    });

require __DIR__.'/auth.php';
