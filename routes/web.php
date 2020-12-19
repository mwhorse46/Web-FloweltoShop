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

Route::get('/', 'PageController@home')->name('home');

Route::group([ 'prefix' => 'user', 'middleware' => 'guest' ], function () {
    Route::get('/register', 'UserController@showRegisterForm')->name('user.register');
    Route::post('/register', 'UserController@register')->name('register');

    Route::get('/login', 'UserController@showLoginForm')->name('user.login');
    Route::post('/login', 'UserController@login')->name('login');
});
Route::group([ 'prefix' => 'user', 'middleware' => 'auth' ], function() {
    Route::get('/changepassword', 'UserController@showPasswordForm')->name('user.password');
    Route::post('/changepassword', 'UserController@change')->name('changePassword');

    Route::get('/logout', 'UserController@logout')->name('user.logout');
});

Route::resource('/category', 'FlowerCategoryController');
Route::resource('/flower', 'FlowerController');

Route::group([ 'prefix' => 'transaction', 'as' => 'transaction.' ], function () {
    Route::get('/', 'TransactionController@index')->name('index');
    Route::get('/cart', 'TransactionController@cart')->name('cart');
    Route::get('/{id}', 'TransactionController@show')->name('show');
    Route::post('/{id}/{qty}', 'TransactionController@update')->name('update');
});

Route::get('/laravel', function() {
    return view('welcome');
});
