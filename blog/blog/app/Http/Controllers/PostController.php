<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Comentario;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('comentario')->get();
        
        return view('posts.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $tags = Tag::all();
        return view('posts.create', compact('categorias','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foto = $request->foto->store('fotos','public');
    //Post::create($request->all()); 

        $post = Post::create([
            'titulo'=>$request->titulo,
            'conteudo'=>$request->conteudo,
            'foto'=>$foto,
            'categoria_id'=>$request->categoria_id
        ]);

        $post->tags()->sync($request->tags);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
      

     public function update(Request $request, string $id)
    {
        $foto = $request->foto->store('fotos','public');

        $post = Post::find($id);
        $post->update([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'foto' => $foto
        ]);
        return redirect()->route('posts.index');   
    }
 
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}