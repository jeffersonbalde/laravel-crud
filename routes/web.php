<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name(name: 'products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name(name: 'products.create');

Route::post("/products", [ProductController::class, "store"])->name("products.store");

Route::put("products/{product}", [ProductController::class, "update"])->name("products.update");