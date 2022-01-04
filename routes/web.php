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
    });

    Route::get('goal', function () {
        return view('goal');
    });

    Route::get('task', function () {
        return view('task');
    });

    Route::get('blog', function () {
        return view('blog');
    });

    Route::get('article', function () {
        return view('article');
    });
});

Route::get('login', function () {
    return view('login');

})->name('login');
