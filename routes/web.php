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

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');


Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::patch("/product/{product}", [ProductController::class, "update"])
    ->name("products.update");


Route::delete("/products/{product}", [ProductController::class, "destroy"])->name("products.destroy");

