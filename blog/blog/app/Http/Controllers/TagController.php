<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Exibe a lista de tags
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    // Exibe o formulário para criar uma nova tag
    public function create()
    {
        return view('tags.create');
    }

    // Armazena a nova tag no banco de dados
    public function store(Request $request)
    {
        // Validação simplificada
        
        // Criação da tag
        Tag::create([
            'nome' => $request->nome, // Armazenando o nome da tag
        ]);

        return redirect()->route('tags.index')->with('success', 'Tag criada com sucesso!');
    }

    // Exibe a tag específica
    public function show(string $id)
    {
        $tag = Tag::find($id);
        return view('tags.show', compact('tag'));
    }

    // Exibe o formulário para editar uma tag
    public function edit(string $id)
    {
        $tag = Tag::find($id);
        return view('tags.edit', compact('tag'));
    }

    // Atualiza a tag no banco de dados
    public function update(Request $request, string $id)
    {
        

        $tag = Tag::find($id);
        $tag->update([
            'nome' => $request->nome,
        ]);

        return redirect()->route('tags.index')->with('success', 'Tag atualizada com sucesso!');
    }

    // Remove a tag do banco de dados
    public function destroy(string $id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect()->route('tags.index')->with('success', 'Tag excluída com sucesso!');
    }
}
