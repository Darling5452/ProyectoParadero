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
    return view('contenido/contenido');
});

Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria/registrar', 'CategoriaController@store');
Route::put('/categoria/actualizar', 'CategoriaController@update');
Route::put('/categoria/desactivar', 'CategoriaController@desactivar');
Route::put('/categoria/activar', 'CategoriaController@activar');

Route::get('/paraderos', 'ParaderosController@index');
Route::post('/paraderos/registrar', 'ParaderosController@store');
Route::put('/paraderos/actualizar', 'ParaderosController@update');
Route::put('/paraderos/desactivar', 'ParaderosController@desactivar');
Route::put('/paraderos/activar', 'ParaderosController@activar');

Route::get('/rutas', 'RutasController@index');
Route::post('/rutas/registrar', 'RutasController@store');
Route::put('/rutas/actualizar', 'RutasController@update');
Route::put('/rutas/desactivar', 'RutasController@desactivar');
Route::put('/rutas/activar', 'RutasController@activar');