<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::view("/", "home");

Route::get("/products", [ProductController::class, "index"])
    ->name("products.index");


Route::get('/products/create', [ProductController::class, 'create'])
    ->name('product.create');

Route::post("/products/store", [ProductController::class, "store"])
    ->name("products.store");

Route::get("/products/{id}", [ProductController::class, "show"])
    ->name("products.show")
    ->whereNumber('id');
