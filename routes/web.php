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
    return '<h1>Listagem de Produtos</h1>';
});

Route::get('/produtos','ProdutoController@lista'); //nome da classe@nome do metodo

Route::get('/produtos/mostra/{id}','ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/remove/{id}','ProdutoController@remove')->where('id', '[0-9]+');

Route::get('/produtos/novo','ProdutoController@novo'); 

Route::post('/produtos/adiciona','ProdutoController@adiciona'); //formulario do tipo post
    
Route::get('/logar','LoginController@form'); 
Route::post('/logar','LoginController@logar'); 

Auth::routes();

Route::get('/home', 'HomeController@index');
