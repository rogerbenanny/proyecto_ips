<?php

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

Route::get('/','InicioController@index') -> name('ini');

Route::get('/universidades/{uniCod}', 'UniversidadesController@universidad') -> name('universidades/') -> where('uniCod', '[0-9]+');


Route::get('/universidades', 'UniversidadesController@index') -> name('universidades');

Route::post('/universidades', 'UniversidadesController@filtro') -> name('filtro');

Route::get('/departamentos', function () {
  return view('departamentos');
})->name('departamentos');

Route::get('/estadisticas', function () {
  return view('estadisticas');
})->name('estadisticas');


Route::get('/programasacademicos/{proCod}', 'ProgramasController@programas') -> name('programasacademicos/') -> where('proCod', '[0-9]+');
Route::get('/programasacademicos', 'ProgramasController@index') -> name('programasacademicos');

Route::post('/programasacademicos', 'ProgramasController@filtro') -> name('filtroprograma');
