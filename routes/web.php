<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', 'HomeController@index')->name('home');

// Posts resources
Route::resource('posts', 'PostController');