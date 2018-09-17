<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Post;

class PostController extends Controller
{
    protected $limit = 3;

    public function index()
    {
        $posts = Post::with('author')->latestFirst()->paginate($this->limit);
        return view('blog.index',compact('posts'));
    }
}
