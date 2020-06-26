<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Maiin 

Route::get('/about', 'MainController@about') -> name('about');
Route::get('/contact', 'MainController@contact') -> name ('contact');
Route::get('/lara-admin-mb', 'MainController@dashboard') -> name ('lara-admin-mb');

// Post


Route::get('/', 'PostsController@index') -> name('index');




