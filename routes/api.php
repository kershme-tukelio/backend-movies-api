<?php

use Illuminate\Http\Request;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\AuthController;

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
Route::get('/movies', [MoviesController::class, 'index']);
Route::post('/movies', [MoviesController::class, 'store']);
Route::get('/movies/{id}', [MoviesController::class, 'show']);
Route::put('/movies/{id}', [MoviesController::class, 'update']);
Route::delete('/movies/{id}', [MoviesController::class, 'destroy']);

Route::post('/register', [AuthController::class, 'register'])->middleware('guest:api');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest:api');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
Route::get('/me', [AuthController::class, 'me'])->middleware('auth:api');
Route::post('/refresh-token', [AuthController::class, 'refreshToken']);