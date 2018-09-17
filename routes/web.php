<?php

Route::get('/','PostController@index');

Route::get('/blog/show', function () {
    return view('blog.show');
});
