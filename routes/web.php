<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/shop', [BookController::class, 'showShopBooks']);

Route::get('/library', function () {
    return view('library');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/read', function () {
    return view('read');
});

Route::get('/leer/laurel_indias', function () {
    return view('read');
})->name('read');

Route::get('/books/search', [BookController::class, 'search'])->name('books.search');

Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

Route::post('/cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');

Route::post('/cart', [CartController::class, 'updateCart'])->name('cart.update');

Route::get('/wallet', function () {
    return view('wallet');
});
