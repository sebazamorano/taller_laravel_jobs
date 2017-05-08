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

Route::get('/', ['as' => 'home', 'uses' => 'IndexController@home']);

//rutas de autemtificacion
Auth::routes();

// homestead.app/admin/*
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', ['as'=> 'home.admin', 'uses' => 'Admin\HomeController@index']);

    Route::get('nuevo-trabajo', ['as' => 'new.job', 'uses' => 'Admin\TrabajoController@create']);
    Route::post('nuevo-trabajo', ['as' => 'save.job', 'uses' => 'Admin\TrabajoController@store']);

    // Solamente el role administrador puede ingresar aca
    Route::group(['middleware' => 'role:admin'], function () {
        Route::resource('categorias', 'Admin\CategoriaController');
        Route::resource('tipos', 'Admin\TipoController');
        Route::resource('niveles', 'Admin\NivelController');
    });
});
