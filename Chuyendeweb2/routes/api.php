<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;

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
Route::get('/', [ComicController::class, 'index']);
Route::get('/hot', [ComicController::class, 'ComicHot']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/datauser', [UserController::class, 'index']);
Route::get('/getdetailtruyen/{id}', [ComicController::class, 'getComicbyID']);
Route::get('/getdetailtacgia/{id}', [AuthorController::class, 'getAuthorbyID']);
Route::get('/getdetailtheloai/{id}', [CategoryController::class, 'getCategorybyID']);
Route::get('/tangview/{id}', [ComicController::class, 'Upview']);
Route::get('/gettopnam', [ComicController::class, 'TopNam']);
Route::get('/getcomicbyid/{id}', [ComicController::class, 'getComicByCategoryID']);

