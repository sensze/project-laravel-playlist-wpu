<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "Posts",
            "posts" => Posts::all()
        ]);
    }
    public function show($slug){
        return view('post', [
            "title" => "Single Post",
            "post" => Posts::find(($slug))
        ]);
    }
}
