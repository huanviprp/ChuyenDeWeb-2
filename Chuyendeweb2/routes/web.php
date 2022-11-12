<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/module12', function () {
    return view('module12');
});
Route::get('/module13', function () {
    return view('module13');
});
Route::get('/module14', function () {

    return view('module14');
});
Route::get('/module15', function () {

    return view('module15');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/ten-truyen-chapter', function () {
    return view('readComic');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

