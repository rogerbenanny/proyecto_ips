<?php

use Illuminate\Support\Facades\Route;

Route::get('/','InicioController@index')->name('ini');

Route::get('/universidades/{uniCod}', 'UniversidadesController@universidad') -> name('universidades/') -> where('uniCod', '[0-9]+');
Route::get('/universidades/locales/{locCod}', 'UniversidadesController@locales') -> name('universidades/locales') -> where('uniCod', '[0-9]+');
Route::get('/universidades', 'UniversidadesController@index') -> name('universidades');
Route::post('/universidades', 'UniversidadesController@filtro') -> name('filtro');

Route::get('/departamentos', function () { return view('departamentos'); })->name('departamentos');

Route::get('/index', function () { return view('index'); })->name('index');
Route::get('Programas/index/{uniCod}', 'ProgramasController@programas') -> name('programa/') -> where('uniCod', '[0-9]+');
Route::get('Programas/index', 'ProgramasController@index')->name('programasacademicos');
Route::post('Programas/index', 'ProgramasController@filtro') -> name('filtro1');
Route::get('/estadisticas', 'EstadisticasController@index')->name('estadisticas');


