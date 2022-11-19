<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangkyController;
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

Route::get('/module13', function () {
    return view('module13');
});

Route::get('/module14', function () {
    return view('module14');
});

Route::resource('dangky', 'DangkyController@index');
Route::post('/dangky', [DangkyController::class, 'store']);
Route::post('/dangky/loginUser','DangkyController@loginUser');