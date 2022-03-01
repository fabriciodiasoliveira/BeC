<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\DepartamentoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lojas', [LojaController::class, 'index'])->name('lojas');
Route::get('lojas/create', [LojaController::class, 'create'])->name('loja.create');
Route::post('lojas/create', [LojaController::class, 'store'])->name('loja.store');
Route::get('lojas/edit', [LojaController::class, 'edit'])->name('loja.edit');
Route::put('lojas/update', [LojaController::class, 'update'])->name('loja.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
