<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioTable extends Migration
{
    public function up()
    {
        Schema::create('comentario', function (Blueprint $table) {
            $table->id();
            $table->text('texto'); // Texto do comentário
            $table->foreignId('posts_id')->references('id')->on('posts'); // Relacionamento com a tabela de posts
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comentario');
    }
}

