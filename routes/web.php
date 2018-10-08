<?php

Route::get('/','PostController@index')->name('post');

Route::get('/blog/{post}','PostController@show')->name('post.show');

Route::get('/blog/category/{category}','PostController@category')->name('post.category');

Route::get('/blog/author/{author}','PostController@author')->name('post.author');

Route::get('category/{category}','CategoryController@index')->name('category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/backend/blog','BlogController');

