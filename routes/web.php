<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('produtos.home');

Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
});

Route::get('/produtos',[ProdutoController::class, 'lista'])->name('produtos.lista');

Route::get('/produtos/mostra/{id}', [ProdutoController::class,'mostra'])->name('produtos.mostra');

Route::get('/produtos/novo', [ProdutoController::class, 'novo'])->name('produtos.novo');

Route::post('/produtos/adiciona', [ProdutoController::class, 'adiciona'])->name('produtos.adiciona');

Route::get('/produtos/json', [ProdutoController::class, 'listaJson']);

Route::get('/produtos/remove/{id}', [ProdutoController::class, 'remove'])->name('produtos.remove');

Route::get('/produtos/edita/{id}', [ProdutoController::class, 'edita'])->name('produto.edita');

Route::post('/produtos/altera/{id}', [ProdutoController::class, 'altera'])->name('produto.altera')->where('id', '[0-9]+');
