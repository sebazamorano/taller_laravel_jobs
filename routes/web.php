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

Route::get('/', ['name' => 'home', 'use' => 'IndexController@home']);

Auth::routes();
// homestead.app/admin/*
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', 'Admin\HomeController@index');
    Route::resource('categorias', 'Admin\CategoriaController');
    Route::resource('tipos', 'Admin\TipoController');
    Route::resource('niveles', 'Admin\NivelController');
});

Route::get('prueba', function () {
	
});
