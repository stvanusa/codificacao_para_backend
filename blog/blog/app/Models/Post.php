<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable = ['titulo','conteudo', 'foto'];

    public function comentario(){
        return $this->hasMany(Comentario::class);
    }
}