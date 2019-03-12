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


Route::get('/clientes', array('as' => 'clientes', 'uses' => 'ClienteController@index'));

Route::get('/usuarios/{equipo_id}/{usuario_id}', array('as' => 'usuarios', 'uses' => 'UsuariosController@index'));
