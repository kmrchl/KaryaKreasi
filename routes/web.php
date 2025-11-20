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
        Route::get('/dashboard', fn() => Inertia::render('Dashboard/Index'))->name('admin.dashboard');
        Route::get('/produk', fn() => Inertia::render('Dashboard/Produk/Index'));
        Route::get('/produk/create', fn() => Inertia::render('Dashboard/Produk/Create'));
        Route::get('/produk/{id}/edit', fn() => Inertia::render('Dashboard/Produk/Edit'));
        
        
        Route::get('/kategori', fn() => Inertia::render('Dashboard/kategori/index'));
        Route::get('/kategori/create', fn() => Inertia::render('Dashboard/kategori/create'));

        Route::get('/admin/kategori/{id_kategori}/edit', function ($id_kategori) {
            return Inertia::render('Dashboard/kategori/edit', [
                'id_kategori' => $id_kategori
            ]);
        });

        Route::get('/artikel', fn() => Inertia::render('Dashboard/Artikel/Index'));
        Route::get('/artikel/create', fn() => Inertia::render('Dashboard/Artikel/Create'));
    });
