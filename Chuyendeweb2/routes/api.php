<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\UserController;
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
// Route::post('/login', [UserController::class, 'login']);
// Route::post('register', [UserController::class, 'register']);
// Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');
Route::get('comics', [ComicController::class, 'index']);
Route::group(['prefix' => 'comic'], function () {
    Route::post('add', [ComicController::class, 'add']);
    Route::get('edit/{id}', [ComicController::class, 'edit']);
    Route::post('update/{id}', [ComicController::class, 'update']);
    Route::delete('delete/{id}', [ComicController::class, 'delete']);
});



Route::get('users', [UserController::class, 'index']);
Route::group(['prefix' => 'user'], function () {
    Route::post('add', [UserController::class, 'add']);
    Route::get('edit/{id}', [UserController::class, 'edit']);
    Route::post('update/{id}', [UserController::class, 'update']);
    Route::delete('delete/{id}', [UserController::class, 'delete']);
});
// Route::get('/dataComic', [ComicController::class, 'index']);
// Route::get('/datauser', [DangkyController::class, 'index']);
