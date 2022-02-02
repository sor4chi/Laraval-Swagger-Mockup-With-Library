<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;

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

Route::prefix('articles')->group(function () {
    Route::get('', [ArticlesController::class, 'index']);
    Route::get('show/{id}', [ArticlesController::class, 'show']);
    Route::post('create', [ArticlesController::class, 'create']);
    Route::put('update/{id}', [ArticlesController::class, 'update']);
    Route::delete('delete/{id}', [ArticlesController::class, 'delete']);
});

Route::prefix('categories')->group(function () {
    Route::get('', [CategoriesController::class, 'index']);
    Route::get('show/{id}', [CategoriesController::class, 'show']);
    Route::post('create', [CategoriesController::class, 'create']);
    Route::put('update/{id}', [CategoriesController::class, 'update']);
    Route::delete('delete/{id}', [CategoriesController::class, 'delete']);
});
