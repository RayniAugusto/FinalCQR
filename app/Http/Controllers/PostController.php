<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
    $posts = \App\Models\Post::paginate(10);
    return view('posts.index', ['posts' => $posts]);
}
}
