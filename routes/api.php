<?php

use App\Http\Controllers\Api\V1\ComparisonController;
use App\Http\Controllers\Api\V1\RoomController;
use App\Http\Controllers\Api\V1\RoomFavoriteController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {

    Route::apiResource('room',RoomController::class);

    Route::get('compare/{id}', [ComparisonController::class, 'compare']);//add to compare
    Route::get('compare', [ComparisonController::class, 'index']);//show compare
    Route::delete('compare/delete/{id}', [ComparisonController::class, 'delete']);//delete one compare

    Route::get('favorite/{id}', [RoomFavoriteController::class, 'favorite']);//add to favorite
    Route::get('favorite/all', [RoomFavoriteController::class, 'index']);//show favorite


});
