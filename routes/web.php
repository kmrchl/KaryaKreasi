<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('Home'))->name('home');
Route::get('/catalog', fn() => Inertia::render('Catalog'))->name('catalog');
Route::get('/contact', fn() => Inertia::render('Contact'))->name('contact');


require __DIR__.'/auth.php';
