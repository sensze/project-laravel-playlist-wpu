<?php

use App\Http\Controllers\PostController;
use App\Models\Posts;
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
    return view('home', [
        "title" => 'Home'
    ]);
});
//Route about
Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "name" => "Ifku Syoba",
        "email" => "ifkusyobaa@gmail.com",
        "image" => "profile_picture.jpg"
    ]);
});



//Route Blog
Route::get('/posts',[PostController::class, 'index'] );


 Route::get('/posts/{slug}', [PostController::class, 'show']);