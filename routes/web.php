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
Route::get('/posts', function () {
    $blog_posts = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ifku Syoba",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione consectetur laboriosam, vel ex maxime ipsum vitae voluptas est minima corporis cumque ea dolorem mollitia necessitatibus nihil earum doloribus accusantium nam natus beatae fugit expedita deserunt nobis? Iusto rem tempora quia aspernatur odio, modi ratione saepe cumque similique vero eum obcaecati? Sit reiciendis corporis aspernatur nostrum blanditiis, non ea possimus enim architecto, quis consequuntur aliquid incidunt ex soluta dolor recusandae! Architecto suscipit labore rem explicabo ex temporibus quae ratione corporis nobis."
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agus Ari",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione consectetur laboriosam, vel ex maxime ipsum vitae voluptas est minima corporis cumque ea dolorem mollitia necessitatibus nihil earum doloribus accusantium nam natus beatae fugit expedita deserunt nobis? Iusto rem tempora quia aspernatur odio, modi ratione saepe cumque similique vero eum obcaecati? Sit reiciendis corporis aspernatur nostrum blanditiis, non ea possimus enim architecto, quis consequuntur aliquid incidunt ex soluta dolor recusandae! Architecto suscipit labore rem explicabo ex temporibus quae ratione corporis nobis."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});
 Route::get('/posts/{slug}', function($slug){
    $blog_posts = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ifku Syoba",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione consectetur laboriosam, vel ex maxime ipsum vitae voluptas est minima corporis cumque ea dolorem mollitia necessitatibus nihil earum doloribus accusantium nam natus beatae fugit expedita deserunt nobis? Iusto rem tempora quia aspernatur odio, modi ratione saepe cumque similique vero eum obcaecati? Sit reiciendis corporis aspernatur nostrum blanditiis, non ea possimus enim architecto, quis consequuntur aliquid incidunt ex soluta dolor recusandae! Architecto suscipit labore rem explicabo ex temporibus quae ratione corporis nobis."
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agus Ari",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione consectetur laboriosam, vel ex maxime ipsum vitae voluptas est minima corporis cumque ea dolorem mollitia necessitatibus nihil earum doloribus accusantium nam natus beatae fugit expedita deserunt nobis? Iusto rem tempora quia aspernatur odio, modi ratione saepe cumque similique vero eum obcaecati? Sit reiciendis corporis aspernatur nostrum blanditiis, non ea possimus enim architecto, quis consequuntur aliquid incidunt ex soluta dolor recusandae! Architecto suscipit labore rem explicabo ex temporibus quae ratione corporis nobis."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
     return view('post', [
         "title" => "Single Post",
         "post" => $new_post
     ]);
 });