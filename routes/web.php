<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\DepartamentoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lojas', [LojaController::class, 'index'])->name('lojas');
Route::get('loja/{id}', [LojaController::class, 'show'])->name('loja');
Route::get('lojas/create', [LojaController::class, 'create'])->name('loja.create');
Route::post('lojas/create', [LojaController::class, 'store'])->name('loja.store');
Route::get('lojas/edit/{id}', [LojaController::class, 'edit'])->name('loja.edit');
Route::put('lojas/update/{id}', [LojaController::class, 'update'])->name('loja.update');
Route::delete('lojas/destroy/{id}', [LojaController::class, 'destroy'])->name('loja.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
