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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/posts', 'middleware' => 'auth:api'], function() {
    Route::get('', [PostController::class, 'show']);// просмотр своих постов авторизованным пользователем
    Route::get('{id}', [PostController::class, 'show']);// просмотр чужих постов авторизованным пользователем
    Route::post('', [PostController::class, 'store']);// создание поста авторизованным пользователем
    Route::delete('{id}', [PostController::class, 'destroy']);// удаление поста авторизованным пользователем
});
