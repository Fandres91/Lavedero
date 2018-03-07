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

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin/perfil', 'perfil_controller@index')->name('home');
Route::get('/admin/perfil', 'perfil_controller@index')->name('perfil');
Route::get('/admin/contratista', 'contratista_controller@index')->name('contratista');
Route::get('/admin/servicio', 'servicio_controller@index')->name('servicio');



// --------------------------------------------API
//---------------------------------------------Perfil
Route::post('/admin/perfil/store', 'perfil_controller@store');
Route::get('/admin/perfil/update','perfil_controller@update');
Route::get('{id}/eliminar','perfil_controller@eliminar');


//---------------------------------------------contratista
Route::post('/admin/contratista/store', 'contratista_controller@store');
//---------------------------------------------servicio
Route::post('/admin/servicio/store', 'servicio_controller@store');
Route::post('/admin/servicio/store2', 'tipo_servicio_controller@store2');
Route::get('/admin/servicio/update', 'tipo_servicio_controller@update');


