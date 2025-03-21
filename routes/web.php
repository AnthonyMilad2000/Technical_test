<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"]);
Route::get("/products/{id}", [ProductController::class, "show"])->name(
    "products.show"
);
