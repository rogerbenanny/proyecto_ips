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

Route::get('/','InicioController@index')->name('ini');
//Route::get('/', function () {
  //  return view('welcome');
//});
//Route::view('biblioteca','welcome');
Route::get('nota', 'notaController@index');
//Route::view('nota','nota');
Route::get('/universidades', function () {
  return view('universidades');
})->name('univer');
Route::get('/departamentos', function () {
  return view('departamentos');
})->name('depar');
Route::get('/estadisticas', function () {
  return view('estadisticas');
})->name('estad');
Route::get('/programasacademicos', function () {
  return view('programasacademicos');
})->name('proac');


