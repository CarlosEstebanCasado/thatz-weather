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

Route::get('/codigo-postal/{cp}',function($cp) {
    return "Codigo Postal : {$cp}";
})->where('cp','[0-9]{5}'); //Los codigos postales es españa tienen 5 cifras