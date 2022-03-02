<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\DepartamentoController;

Route::get('/', function () {
    return view('welcome');
});
//Loja
Route::get('lojas', [LojaController::class, 'index'])->name('lojas');
Route::get('lojas/create', [LojaController::class, 'create'])->name('loja.create');
Route::post('lojas', [LojaController::class, 'store'])->name('loja.store');
Route::get('lojas/edit/{id}', [LojaController::class, 'edit'])->name('loja.edit');
Route::put('lojas/update/{id}', [LojaController::class, 'update'])->name('loja.update');
Route::delete('lojas/destroy/{id}', [LojaController::class, 'destroy'])->name('loja.destroy');
//Departamento
Route::get('departamentos/{id}', [DepartamentoController::class, 'index'])->name('departamentos');
Route::get('departamentos/create/{id}', [DepartamentoController::class, 'create'])->name('departamento.create');
Route::post('departamentos', [DepartamentoController::class, 'store'])->name('departamento.store');
Route::get('departamentos/edit/{id}', [DepartamentoController::class, 'edit'])->name('departamento.edit');
Route::put('departamentos/update/{id}', [DepartamentoController::class, 'update'])->name('departamento.update');
Route::delete('departamentos/destroy/{id}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');
//Produto
Route::get('produtos/{id}', [ProdutoController::class, 'index'])->name('produtos');
Route::get('produto/{id}', [ProdutoController::class, 'show'])->name('produto');
Route::get('produtos/create/{id}', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('produtos', [ProdutoController::class, 'store'])->name('produto.store');
Route::get('produtos/edit/{id}', [ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('produtos/update/{id}', [ProdutoController::class, 'update'])->name('produto.update');
Route::delete('produtos/destroy/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy');
Route::post('produtos/upload/{id}', [ProdutoController::class, 'upload'])->name('produto.upload');
Route::get('produtos/show/upload/{id}', [ProdutoController::class, 'showUpload'])->name('produto.show.upload');
Route::get('produto/loja/{id}', [ProdutoController::class, 'show_loja'])->name('produtos.loja');
Route::get('produto/departamento/{id}', [ProdutoController::class, 'show_departamento'])->name('produtos.departamento');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
