<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
    Route::get('/', function() {
        return view('category/index');
    })->name('index');

    Route::get('/{id}', function() {
        return view('category/show');
    })->name('show');

    Route::get('/{id}/edit', function() {
        return view('category/edit');
    })->name('edit');
});

Route::group(['prefix' => 'flower', 'as' => 'flower.'], function () {
    Route::get('/', function() {
        return view('flower/index');
    })->name('index');

    Route::get('/{id}', function() {
        return view('flower/show');
    })->name('show');

    Route::get('/{id}/edit', function() {
        return view('flower/edit');
    })->name('edit');
});

Route::group(['prefix' => 'transaction', 'as' => 'transaction.'], function () {
    Route::get('/', function() {
        return view('transaction/index');
    })->name('index');

    Route::get('/{id}', function() {
        return view('transaction/show');
    })->name('show');

    Route::get('/cart', function() {
        return view('transaction/cart');
    })->name('cart');
});

Route::get('/laravel', function() {
    return view('welcome');
});

Route::get('/test', function() {
    return view('transaction/cart');
});

