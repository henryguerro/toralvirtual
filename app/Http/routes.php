<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/prueba', 'prueba@index');

Route::get('/', 'AppController@index');

// User authentication routes
Route::get('/auth/loggedin','AuthController@loggedin');
Route::post('/auth/login','AuthController@login');
//Route::get('/auth/register','AuthController@register');
Route::get('/auth/logout','AuthController@logout');


Route::get('eventos','EventoController@index');

Route::get('/reporte/instalacion','Reporte@index');
Route::get('/reporte/instalacion/create','Reporte@createPdf');

