<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\UserController;

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('home');

Route::get('/product/{slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

Route::get('/category/{slug}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::get('/cart/del-item', [\App\Http\Controllers\CartController::class, 'delItem'])->name('cart.del_item');
Route::get('/cart/clear', [\App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
Route::get('/cart/show', [\App\Http\Controllers\CartController::class, 'show'])->name('cart.show');

Route::match(['get', 'post'], '/cart/checkout', [\App\Http\Controllers\CartController::class, 'checkout'])->name('cart.checkout');

Route::get('/register', [UserController::class, 'create'])->name('register.create');
Route::post('/register', [UserController::class, 'create'])->name('register.store');