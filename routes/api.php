<?php

declare(strict_types = 1);

use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\GoalController;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('posts/{post}', [PostController::class, 'show']);
Route::get('posts', [PostController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/auth/logout', [AuthController::class, 'logout']);

    Route::get('users/auth', [UserController::class, 'getAuth']);

    Route::controller(TaskController::class)->group(function () {
        Route::get('tasks', 'index');
        Route::post('tasks', 'store');
        Route::put('tasks/{task}', 'update');
        Route::patch('tasks/{task}/done', 'done');
        Route::delete('tasks/{task}', 'delete');
    });

    Route::controller(GoalController::class)->group(function () {
        Route::get('goals', 'index');
        Route::post('goals', 'store');
        Route::put('goals/{goal}', 'update');
        Route::delete('goals/{goal}', 'delete');
    });

    Route::controller(PostController::class)->group(function () {
        Route::post('posts', 'store');
        Route::patch('posts/{post}', 'update')->middleware('can:update,post');
        Route::delete('posts/{post}', 'delete')->middleware('can:delete,post');
    });
});
