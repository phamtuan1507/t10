<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('homepage');
    // return User::all();
    // return Product::find(1)->ProductImage;
    // return $productRepository->all();
// });
Route::get('/', function () {
    return view('homepage');
});

// Route::get('/', [HomeController::class , 'show']);
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/chi-tiet-san-pham/{id}', [ProductDetailController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/create-movie', [AdminController::class, 'createMovie'])->name('admin.create.movie');
    Route::post('/store-movie', [AdminController::class, 'storeMovie'])->name('admin.store.movie');
});

Route::prefix('user')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
});

// API Routes
Route::get('/api/movies', [AdminController::class, 'apiMovies']);
Route::get('/api/users', [UserController::class, 'apiUsers']);
