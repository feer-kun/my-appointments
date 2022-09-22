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

Route::get('/', function () {
    return view('Welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Specialty
Route::get('/specialties', 'SpecialtyController@index')->name('specialties'); 
Route::get('/specialties/create', 'SpecialtyController@create')->name('specialties.create'); //formulario de registro
Route::get('/specialties/{Specialty}/edit', 'SpecialtyController@edit'); //formulario con datos para editar
Route::post('/specialties', 'specialtyController@index')->name('user');//formulario para guardar los datos 