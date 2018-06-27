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

//
//Route::resource('message', 'MessageController');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('produto', 'ProdutoController')->middleware('auth');

Route::resource('estoque', 'EstoqueController')->middleware('auth');

Route::resource('fornecedor', 'FornecedorController')->middleware('auth');

Route::resource('vendedor', 'VendedorController')->middleware('auth');

Route::resource('produtoestoque', 'ProdutoEstoqueController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
