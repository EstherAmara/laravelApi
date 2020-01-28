<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Post;

class PostsController extends Controller
{
    public function show(Post $post) {
        return view('welcome', compact('post'));
    } 
}
