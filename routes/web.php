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

Route::get('curso', 'CursoController@index');
Route::get('clase', 'ClaseController@index');
Route::get('actividad', 'ActividadController@index');
Route::post('actividad', 'ActividadController@store');

