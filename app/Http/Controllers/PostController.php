<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Post;
use App\Category;
use App\User;

class PostController extends Controller
{
    protected $limit = 3;


    public function index()
    {
        // $categories = Category::with('posts')->orderBy('title','asc')->get ();
        // \DB::enableQueryLog();
        $posts = Post::with('author')->latestFirst()->paginate($this->limit);
        return view('blog.index',compact('posts'));
        // dd(\Db::getQueryLog());
    }

    
    public function category(Category $category)
    {
        $categoryName = $category->title;                        
        // \DB::enableQueryLog();

        $posts = $category->posts()
                            ->with('author')
                            ->paginate($this->limit);
        return view('blog.index',compact('posts','categoryName'));
        // dd(\Db::getQueryLog());
    }

    public function author(User $author)
    {
        $userName = $author->name;
        $posts = $author->posts()
                            ->with('author')
                            ->paginate($this->limit);
        return view('blog.index',compact('posts','userName'));
        // dd(\Db::getQueryLog());
    }

    public function show(Post $post)
    {

        //$post = Post::where('slug',$slug)->first();
       //dd($post);
        $post->increment('view_count',1);
        return view('blog.show',compact('post'));
    }
}
