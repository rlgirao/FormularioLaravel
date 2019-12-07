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

Route::resource('refrigerantes', 'refrigeranteController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cancelar', function(){
    return redirect()->route('refrigerantes.index')->withInfoMesage('Cancelada!');
})->name('cancelar');

Route::get('/refrigerante/{id}/confirm','refrigeranteController@confirm')->name('refrigerantes.confirm');