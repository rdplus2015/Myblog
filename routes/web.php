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
Route::get('/author/{id}/edit', 'AuthorsController@edit') -> name('author.edit');
Route::put('/author/{id}/update', 'AuthorsController@update') -> name('author.update');
Route::get('/author/{id}/destroy', 'AuthorsController@destroy') -> name('author.destroy');



// category

Route::get('/category', 'CategoriesController@index') -> name('category.index');
Route::get('/category/create', 'CategoriesController@create') -> name('category.create');
Route::post('/category/store', 'CategoriesController@store') -> name('category.store');
Route::get('/category/{id}/edit', 'CategoriesController@edit') -> name('category.edit');
Route::put('/category/{id}/update', 'CategoriesController@update') -> name('category.update');
Route::get('/category/{id}/destroy', 'CategoriesController@destroy') -> name('category.destroy');


// Post

Route::get('/', 'PostsController@index') -> name('index'); // users
Route::get('/post/{id}/postview', 'PostsController@show') -> name('post.view'); // users

Route::get('/post/create', 'PostsController@create') -> name('post.create');
Route::post('/post/store', 'PostsController@store') -> name('post.store');
Route::get('/post/{id}/overview', 'PostsController@overview') -> name('post.overview');
Route::get('/post', 'PostsController@post_view_all') -> name('post.view_all');
Route::get('/post/{id}/postedit', 'PostsController@edit') -> name('post.edit');
Route::put('/post/{id}/postupdate', 'PostsController@update') -> name('post.update');
Route::get('/post/{id}/postdestroy', 'PostsController@destroy') -> name('post.destroy');
