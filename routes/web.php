<?php

Route::get('/','PostController@index')->name('post');

Route::get('/blog/{post}','PostController@show')->name('post.show');
