<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto/listar',[ProdutoController::class,'index'])->name('produto.index');
Route::get('/produto/contato',[ProdutoController::class,'contato']);
Route::get('/produto/cadastrar',[ProdutoController::class,'cadastrar']);
Route::post('/produto/salvar',[ProdutoController::class,'store'])->name('produto.store');
Route::get('/cliente/listar',[ClienteController::class,'index'])->name('cliente.index');
Route::get('/cliente/cadastrar',[ClienteController::class,'create']);
Route::post('/cliente/salvar',[ClienteController::class,'store'])->name('cliente.store');//cliente.salvar    
Route::delete('/cliente/excluir/{id}',[ClienteController::class,'destroy'])->name('cliente.excluir');
Route::delete('/produto/excluir/{id}',[ProdutoController::class,'destroy'])->name('produto.excluir');
  