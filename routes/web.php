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

// Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/estudiantes', 'EstudianteController@index');
// Route::get('/estudiantes/create', 'EstudianteController@create');
Route::resource('estudiantes', 'EstudianteController');
Route::patch('estudiantes/{id}/edit', 'EstudianteController@update')->name('estudiantes.update');

Route::resource('estudiantes1', 'Estudiantes1Controller');
Route::patch('estudiantes1/{id}/edit', 'Estudiantes1eController@update')->name('estudiantes1.update');

//route socioeconomico

Route::resource('estudiosocioeconimico', 'EstudioSocioeconimicoController');
Route::patch('estudiosocioeconimico/{id}/edit', 'EstudioSocioeconimicoController@update')->name('estudiosocioeconimico.update');
