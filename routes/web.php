<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/shop', function () {
    return view('shop');
});

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

// Route::get('/cart', function () {
//     return view('books');
// });

// Route::get('/crear', function () {
//     return view('create');
// });

Route::get('/books/search', [BookController::class, 'search'])->name('books.search');

Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

