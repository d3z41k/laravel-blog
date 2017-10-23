<?php

Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/{task}', 'TaskController@show');


Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');
