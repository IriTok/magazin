<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('home');

Route::get('/product/{slug}', [\App\Http\ProductController::class, 'show'])->name('products.show');

Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');