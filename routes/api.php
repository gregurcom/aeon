<?php

declare(strict_types = 1);

use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\GoalController;
use App\Http\Controllers\API\TaskController;
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

Route::get('articles/{article}', [ArticleController::class, 'show']);
Route::get('articles', [ArticleController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function() {
        return auth()->user();
    });

    Route::post('/auth/logout', [AuthController::class, 'logout']);

    Route::get('tasks', [TaskController::class, 'index']);
    Route::post('tasks', [TaskController::class, 'store']);
    Route::put('tasks/{task}', [TaskController::class, 'update']);
    Route::patch('tasks/{task}/done', [TaskController::class, 'done']);
    Route::delete('tasks/{task}', [TaskController::class, 'delete']);

    Route::get('goals', [GoalController::class, 'index']);
    Route::post('goals', [GoalController::class, 'store']);
    Route::put('goals/{goal}', [GoalController::class, 'update']);
    Route::delete('goals/{goal}', [GoalController::class, 'delete']);

    Route::post('articles', [ArticleController::class, 'store']);
    Route::put('articles/{article}', [ArticleController::class, 'update']);
    Route::delete('articles/{article}', [ArticleController::class, 'delete']);
});
