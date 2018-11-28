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
// AUTH
Route::post('/signup', 'UsuarioController@signUp');
Route::post('/login', 'UsuarioController@login');

// POST
Route::get('/feed', 'PostController@feed');
Route::post('/createpost', 'PostController@createPost');
Route::get('/deletepost/{post_id}', 'PostController@deletePost');
