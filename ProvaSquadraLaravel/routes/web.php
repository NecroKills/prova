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

//nome, apelido,controller, metodo
Route::get('/',['as'=>'home', 'uses'=>'HomeController@index']);
Route::get('/sistema/buscar',['as'=>'sistema.buscar', 'uses'=>'SistemaController@buscar']);
Route::get('/sistema/adicionar',['as'=>'sistema.adicionar','uses'=>'SistemaController@adicionar']);
Route::post('/sistema/salvar',['as'=>'sistema.salvar','uses'=>'SistemaController@salvar']);
Route::get('/sistema/editar/{id}',['as'=>'sistema.editar', 'uses'=>'SistemaController@editar']);
Route::put('/sistema/atualizar/{id}',['as'=>'sistema.atualizar', 'uses'=>'SistemaController@atualizar']);
