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
Auth::routes();

// AUTH
Route::post('/signup', 'UsuarioController@signUp');
Route::post('/login', 'UsuarioController@login');

// POST
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/feed', 'PostController@feed')->middleware('auth');
Route::post('/createpost', 'PostController@createPost')->middleware ( 'auth' );
Route::get('/deletepost/{post_id}', 'PostController@deletePost')->middleware ( 'auth' );

//PERFIL
Route::get('/perfil/{id?}', 'UsuarioController@perfil');
Route::post('/salvarmudancas', 'UsuarioController@salvarMudancas');
