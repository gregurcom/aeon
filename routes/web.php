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

Route::middleware('app.unauthorized')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('home');

    Route::get('goal', function () {
        return view('goal');
    })->name('goal');

    Route::get('task', function () {
        return view('task');
    })->name('task');

    Route::get('blog', function () {
        return view('blog');
    })->name('blog');

    Route::get('article', function () {
        return view('article');
    });
});

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('registration', function () {
    return view('auth.registration');
})->name('registration');
