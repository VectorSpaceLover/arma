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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/categorias', \App\Http\Controllers\CategoriaController::class);
Route::resource('/productos', \App\Http\Controllers\ProdutosController::class);
//Adonis
Route::resource('/users', \App\Http\Controllers\UsersController::class);

// Venus
Route::resource('/clientes', \App\Http\Controllers\ClientesController::class);
Route::resource('/estoque', \App\Http\Controllers\EstoqueController::class);
Route::resource('/faturacao', \App\Http\Controllers\FaturacaoController::class);
Route::resource('/cotacao', \App\Http\Controllers\CotacaoController::class);
Route::resource('/guia', \App\Http\Controllers\GuiaController::class);
Route::resource('/despesas', \App\Http\Controllers\DespesasController::class);
Route::resource('/licenciamento', \App\Http\Controllers\LicenciamentoController::class);
Route::resource('/gest', \App\Http\Controllers\GestController::class);
Route::resource('/tipos/cliente', \App\Http\Controllers\TiposClienteController::class);
Route::resource('/tipos/despesas', \App\Http\Controllers\TiposDespesasController::class);
Route::resource('/tipos/produtos', \App\Http\Controllers\TiposProdutosController::class);
Route::resource('/empresa', \App\Http\Controllers\EmpresaController::class);
// Venus
