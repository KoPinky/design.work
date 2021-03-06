<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StageController;
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


Route::get('service', [ServiceController::class, 'show']);
Route::post('service', [ServiceController::class, 'store']);
Route::post('service/{service}', [ServiceController::class, 'update']);
Route::delete('service/{id}', [ServiceController::class, 'destroy']);

Route::get('stage/{id}', [StageController::class, 'show']);
Route::post('stage', [StageController::class, 'store']);
Route::post('stage/{service}', [StageController::class, 'update']);
Route::delete('stage/{id}', [StageController::class, 'destroy']);


