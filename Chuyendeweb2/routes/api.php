<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
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
Route::get('authors', [AuthorController::class, 'index']);
Route::group(['prefix' => 'author'], function () {
    Route::post('add', [AuthorController::class, 'add']);
    Route::get('edit/{id}', [AuthorController::class, 'edit']);
    Route::post('update/{id}', [AuthorController::class, 'update']);
    Route::delete('delete/{id}', [AuthorController::class, 'delete']);
});
Route::get('categorys', [CategoryController::class, 'index']);
Route::group(['prefix' => 'category'], function () {
    Route::post('add', [CategoryController::class, 'add']);
    Route::get('edit/{id}', [CategoryController::class, 'edit']);
    Route::post('update/{id}', [CategoryController::class, 'update']);
    Route::delete('delete/{id}', [CategoryController::class, 'delete']);
});
Route::get('comments', [CommentController::class, 'index']);
Route::group(['prefix' => 'comment'], function () {
    Route::delete('delete/{id}', [CommentController::class, 'delete']);
});
// Route::get('/dataComic', [ComicController::class, 'index']);
// Route::get('/datauser', [DangkyController::class, 'index']);
