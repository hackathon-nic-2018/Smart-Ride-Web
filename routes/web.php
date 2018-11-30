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
    return view('home');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


//Rutas para el perfil de padres de familia
Route::Resource('/registroPadres', 'PadresController');
Route::get('/perfil', 'PadresController@perfil');

