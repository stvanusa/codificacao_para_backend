<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/index',[PostController::class,'index'])->name('posts.index');
Route::get('posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('posts/salvar',[PostController::class,'store'])->name('posts.store');
Route::delete('posts/excluir/{id}',[PostController::class,'destroy'])->name('posts.destroy');
Route::get('posts/editar/{id}',[PostController::class,'edit'])->name('posts.edit');
Route::put('posts/atualizar/{id}',[PostController::class,'update'])->name('posts.update');
Route::get('posts/visualizar/{id}',[PostController::class,'show'])->name('posts.show');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::post('comentario/salvar',[ComentarioController::class,'store'])->name('comentario.store');

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');


Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');


Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');


Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');


Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');


Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');


Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

