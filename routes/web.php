<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailController;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Service\Product\ProductServiceInterface;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('homepage');
    // return User::all();
    // return Product::find(1)->ProductImage;
    // return $productRepository->all();
// });
Route::get('/chi-tiet-san-pham', function () {
    return view('product-detail');
});

// Route::get('/', [HomeController::class , 'show']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/chi-tiet-san-pham/{id}', [ProductDetailController::class, 'index']);
