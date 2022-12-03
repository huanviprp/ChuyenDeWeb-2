<?php

use App\Http\Controllers\DangkyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/module13', function () {
//     return view('module13');
// });
// Route::get('/module14', function () {
//     return view('module14');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::resource('dangky', 'DangkyController');
// Route::post('/dangky', [DangkyController::class, 'store']);



Route::get('{any}', function(){
    return view('app');
})->where('any','.*');
// Route::resource('register', 'DangkyController');
// Route::post('/register', [DangkyController::class, 'store']);
// Route::get('/register/loginUser', [DangkyController::class, 'loginUser']);
// Route::post('/', [DangkyController::class, 'loginUser']);
