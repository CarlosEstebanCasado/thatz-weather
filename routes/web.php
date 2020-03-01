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

use App\Http\Controllers\CodigoPostalController;

Route::get('/', 'CodigoPostalController@index')->name('home');

/*Route::get('/codigo-postal/{cp}', 'CodigoPostalController@mostrarCodigoPostal')
    ->where('cp', '[0-9]{5}');*/ //Los codigos postales en españa tienen 5 cifras

Route::get('/resultado', 'CodigoPostalController@mostrarCodigoPostal')->name('resultado');
    
