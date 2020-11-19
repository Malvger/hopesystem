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

 

Route::resource('user', 'UserController');
// Route::get('/perfil', 'UserController@update')->name('user.update');
Route::patch('/perfil', 'UserController@update')->name('user.update');

// Route::get('/estudiantes', 'EstudianteController@index');
// Route::get('/estudiantes/create', 'EstudianteController@create');
Route::resource('estudiantes', 'EstudianteController');
Route::patch('estudiantes/{id}/edit', 'EstudianteController@update')->name('estudiantes.update');

//Informes
Route::name('reporteEstudiantes')->get('/imprimir-listado-estudiantes', 'EstudianteController@getPdf');
Route::name('imprimir-informe-estudiante')->get('/imprimir-informe-estudiante/{id}', 'EstudianteController@imprimirInformePdf');
Route::name('imprimir-informe-esocioeconomico')->get('/imprimir-informe-esocioeconomico/{id}', 'EstudioSocioeconimicoController@imprimirInformePdf');

Route::resource('estudiantes1', 'Estudiantes1Controller');
Route::patch('estudiantes1/{id}/edit', 'Estudiantes1Controller@update')->name('estudiantes1.update');

//route socioeconomico
//comit 2

Route::resource('estudiosocioeconimico', 'EstudioSocioeconimicoController');
Route::patch('estudiosocioeconimico/{id}/edit', 'EstudioSocioeconimicoController@update')->name('estudiosocioeconimico.update');


Route::get('cursos/{id}/notas', 'CursoController@notas')->name('cursos.notas');
// Route::patch('cursos/{id}/notas', 'CursoController@notas')->name('cursos.notas');
Route::post('cursos/{id}/notas', 'CursoController@notas')->name('cursos.notas');

Route::resource('cursos', 'CursoController');
Route::patch('cursos/{id}/edit', 'CursoController@update')->name('cursos.update'); 
Route::delete('cursos/{id}', 'GradoController@destroy')->name('cursos.destroy');

Route::resource('grados', 'GradoController');
Route::patch('grados/{id}/edit', 'GradoController@update')->name('grados.update'); 
Route::delete('grados/{id}', 'GradoController@destroy')->name('grados.destroy');

Route::resource('notas', 'NotasController');
Route::patch('notas/{id}/edit', 'NotasController@update')->name('notas.update'); 
Route::POST('notas/create', 'NotasController@create')->name('notas.create'); 

Route::resource('reportes', 'ReportesController');
 