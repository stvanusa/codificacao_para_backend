<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function store(Request $request)
    {
        Comentario::create([
            'texto' => $request->texto,
            'post_id' => $request->post_id
        ]);

        $posts = Post::with('comentario')->get();
        return view('posts.index',compact('posts'));
    }

    
}

