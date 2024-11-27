<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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