<?php

use App\Http\Controllers\PostController;
use App\Models\Post;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/index',[PostController::class,'index'])->name('post.index');
Route::get('post/cadastrar',[PostController::class,'create'])->name('post.create');
Route::get('post/salvar',[PostController::class,'store'])->name('post.store');
Route::get('post/excluir',[PostController::class,'index'])->name('post.destroy');
