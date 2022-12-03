<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', [ComicController::class, 'index']);
Route::get('/hot', [ComicController::class, 'ComicHot']);
// Route::get('/category', [ComicController::class, 'Category']);
Route::get('/datauser', [UserController::class, 'index']);
Route::get('/getdetailtruyen/{id}', [ComicController::class, 'getComicbyID']);
Route::get('/getdetailtacgia/{id}', [AuthorController::class, 'getAuthorbyID']);
Route::get('/getdetailtheloai/{id}', [CategoryController::class, 'getCategorybyID']);
Route::get('/tangview/{id}', [ComicController::class, 'Upview']);
Route::get('/gettopnam', [ComicController::class, 'TopNam']);
Route::get('/gettophot', [ComicController::class, 'TopHot']);
Route::post('/kiemtra', [AuthController::class, 'login']);
Route::post('/createuser', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [\App\Http\Controllers\AuthController::class, 'user']);
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});
// Route::get('/user', [AuthController::class, 'user']);
// Route::get('/logout', [AuthController::class, 'logout']);
