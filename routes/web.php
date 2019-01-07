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


Route::get('/', 'userController@index');

Route::get('/usuarios/nuevo','userController@users');

//utilizando parámetros dinámicos en la url

Route::get('/usuarios/{id}', 'userController@show');

Route::get('/saludo/{name}/{lastname}','userController@welcome' );

