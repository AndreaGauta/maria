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
use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('home');
});

Route::resource('personas' , 'PersonaController');
Route::get('personas/{persona}/delete','PersonaController@delete')->name('personas.delete');

/**
 * ruta de libros
*/
Route::get('libros/{persona_id}','LibroController@listarPorPersona')->name('libros.index');
Route::get('libros/{persona_id}/create','LibroController@create')->middleware(['auth'])->name('libros.create');
Route::get('libros/{libro}/edit','LibroController@edit')->name('libros.edit');
Route::get('libros/{libro}/delete','LibroController@delete')->name('libros.delete');
Route::delete('libros/{libro}','LibroController@destroy')->name('libros.destroy');
Route::post('libros','LibroController@store')->name('libros.store');
Route::put('libros/{libro}/update','LibroController@update')->name('libros.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
