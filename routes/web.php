<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/lara-admin-mb', 'MainController@dashboard') -> name ('lara-admin-mb') ->middleware('auth');


// auth

Auth::routes();

Route::get('/logout', function(){
    auth()->logout();
    session()->flush();
    return redirect('/');
})->name('logout');

// author

Route::get('/author', 'AuthorsController@index') -> name('author.index');
Route::get('/author/create', 'AuthorsController@create') -> name('author.create');
Route::post('/author/store', 'AuthorsController@store') -> name('author.store');


// category



// Post

Route::get('/', 'PostsController@index') -> name('index');



