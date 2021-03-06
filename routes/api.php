<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\FriendController;
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
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/user/{user}', [UserController::class, 'show']);
    Route::get('/friends', [FriendController::class, 'index']);
    Route::post('/friends/{user}', [FriendController::class, 'store']);
    Route::patch('/friends/{user}', [FriendController::class, 'update']);
    Route::get('/friends/{user}', [FriendController::class, 'dany']);
    Route::delete('/friends/{user}', [FriendController::class, 'destroy']);
});
