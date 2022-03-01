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
Route::get('loja/{id}', [LojaController::class, 'show'])->name('loja');
Route::get('lojas/create', [LojaController::class, 'create'])->name('loja.create');
Route::post('lojas', [LojaController::class, 'store'])->name('loja.store');
Route::get('lojas/edit/{id}', [LojaController::class, 'edit'])->name('loja.edit');
Route::put('lojas/update/{id}', [LojaController::class, 'update'])->name('loja.update');
Route::delete('lojas/destroy/{id}', [LojaController::class, 'destroy'])->name('loja.destroy');
//Departamento
Route::get('departamentos/{id}', [DepartamentoController::class, 'index'])->name('departamentos');
Route::get('departamento/{id}', [DepartamentoController::class, 'show'])->name('departamento');
Route::get('departamentos/create/{id}', [DepartamentoController::class, 'create'])->name('departamento.create');
Route::post('departamentos', [DepartamentoController::class, 'store'])->name('departamento.store');
Route::get('departamentos/edit/{id}', [DepartamentoController::class, 'edit'])->name('departamento.edit');
Route::put('departamentos/update/{id}', [DepartamentoController::class, 'update'])->name('departamento.update');
Route::delete('departamentos/destroy/{id}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
