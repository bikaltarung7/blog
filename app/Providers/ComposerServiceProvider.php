<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

use App\Category;
use App\Post;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar',function($view){
            $categories = Category::with('posts')
                ->orderBy('title','asc')->get();
            
            return $view->with('categories',$categories);
        });

        view()->composer('layouts.sidebar',function($view){
            $popularPosts = Post::orderBy('view_count','desc')->take(4)->get();
            
            return $view->with('popularPosts',$popularPosts);
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
