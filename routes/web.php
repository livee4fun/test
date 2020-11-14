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
/*
Route::get('/', function () {
    return view('home');
});

//Auth::routes();

*/
//Inicio
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//CRUD usuarios
Route::get('/users', 'UserController@index');
Route::post('users', 'UserController@store')->name('users.store');
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');

//CRUD juegos
Route::get('/juegos-admin', 'JuegosController@index_admin');
Route::post('juegos', 'JuegosController@store')->name('juegos.store');
Route::delete('juegos/{juego}', 'JuegosController@destroy')->name('juegos.destroy');

//Juegos GRAL
Route::get('/juegos', 'JuegosController@index_all');
