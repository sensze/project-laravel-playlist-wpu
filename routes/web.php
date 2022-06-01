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
//Route home
Route::get('/', function () {
    return view('home');
});
//Route about
Route::get('/about', function () {
    return view('about', [
        "name" => "Ifku Syoba",
        "email" => "ifkusyobaa@gmail.com",
        "image" => "profile_picture.jpg"
    ]);
});
//Route Blog
Route::get('/posts', function () {
    return view('posts');
});