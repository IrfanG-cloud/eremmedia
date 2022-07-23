<?php

use Illuminate\Http\Request;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('articles', [App\Http\Controllers\ArticleController::class, 'index']);
Route::get('articles/{id}', [App\Http\Controllers\ArticleController::class, 'show']);
Route::post('articles', [App\Http\Controllers\ArticleController::class, 'store']);
Route::put('articles/{id}', [App\Http\Controllers\ArticleController::class, 'update']);
Route::delete('articles/{id}', [App\Http\Controllers\ArticleController::class, 'delete']);


Route::get('users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('users/{id}', [App\Http\Controllers\UserController::class, 'show']);
Route::post('users', [App\Http\Controllers\UserController::class, 'store']);
Route::put('users/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('users/{id}', [App\Http\Controllers\UserController::class, 'delete']);


Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('categories/{id}', [App\Http\Controllers\CategoryController::class, 'show']);
Route::post('categories', [App\Http\Controllers\CategoryController::class, 'store']);
Route::put('categories/{id}', [App\Http\Controllers\CategoryController::class, 'update']);
Route::delete('categories/{id}', [App\Http\Controllers\CategoryController::class, 'delete']);
