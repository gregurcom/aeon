<?php

use App\Http\Controllers\AuthController;
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
Route::redirect('/', 'home');
Route::view('/blog', 'index')->withoutMiddleware('auth');
Route::view('/posts/{post}/view', 'index')->withoutMiddleware('auth');

Route::middleware('auth')->group(function () {
    Route::view('/home', 'index');
    Route::view('/tasks', 'index');
    Route::view('/goals', 'index');
    Route::view('/achievements', 'index');
    Route::view('/posts/store', 'index');
    Route::view('/posts/{post}/update', 'index')->middleware('can:update,post');
    Route::view('/followed', 'index');
    Route::view('/assign/task', 'index');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'authenticate')->name('authenticate');

    Route::get('registration', 'registration')->name('registration');
    Route::post('registration', 'save')->name('register');
});
