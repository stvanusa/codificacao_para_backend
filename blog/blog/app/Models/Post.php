<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable = ['titulo','conteudo', 'foto','categoria_id'];

    public function comentario(){
        return $this->hasMany(Comentario::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);

    }
    public function tags(){
        return $this->belongsToMany(Tag::class);

}

}