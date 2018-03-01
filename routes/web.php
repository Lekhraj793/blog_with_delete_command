<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'PostController@index');
Route::get('/posts/insert', 'PostController@insert');
Route::post('/insert', 'PostController@Store');
Route::get('/posts/show/{id}', 'PostController@show');

Route::post('/comment/{id}', 'CommentController@store');
Route::get('/comments/edit/{id}', 'CommentController@edit');
Route::post('/update', 'CommentController@update');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts/edit/{id}', 'HomeController@edit');
Route::post('/update', 'HomeController@update');
Route::get('/delete/{id}', 'HomeController@destroy');
