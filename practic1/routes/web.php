<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\App\Http\Controllers\ProductController;

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('home');