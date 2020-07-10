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

Route::get('/universidades', 'UniversidadesController@index') -> name('universidades');

Route::get('/universidades/{uniCod}', function($uniCod) {
    //return view('universidad', ['uni' => Universidad::findOrFail($uniCod)]);
    return view('universidad', ['uniCod' => $uniCod]);
}) -> where('uniCod', '[0-9]+');

Route::get('/departamentos', function () {
  return view('departamentos');
})->name('departamentos');

Route::get('/estadisticas', function () {
  return view('estadisticas');
})->name('estadisticas');

Route::get('/programasacademicos', function () {
  return view('programasacademicos');
})->name('programasacademicos');


