<?php

use App\Http\Controllers\AuthController;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('Home'))->name('home');
Route::get('/about', fn() => Inertia::render('About'))->name('about');
Route::get('/products', fn() => Inertia::render('Products'))->name('products');
Route::get('/project', fn() => Inertia::render('Project'))->name('project');
Route::get('/contact', fn() => Inertia::render('Contact'))->name('contact');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // ✅ pindahin ke luar sini

Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/dashboard', fn() => Inertia::render('Dashboard/index'))->name('admin.dashboard');
        Route::get('/produk', fn() => Inertia::render('Dashboard/Produk/index'));
        Route::get('/produk/create', fn() => Inertia::render('Dashboard/Produk/create'));
        Route::get('/produk/{id}/edit', fn() => Inertia::render('Dashboard/Produk/edit'));
    });
