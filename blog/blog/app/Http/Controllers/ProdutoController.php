<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtém todos os produtos
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Recupera todas as categorias para preencher o dropdown
        $categorias = Categoria::all();
        return view('produto.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados do produto
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        // Criação do novo produto
        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'categoria_id' => $request->categoria_id,
        ]);

        // Redireciona para a lista de produtos com mensagem de sucesso
        return redirect()->route('produto.index')->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encontra o produto pelo ID, caso não encontre lança exceção
        $produto = Produto::findOrFail($id);
        return view('produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Encontra o produto e as categorias
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::all();
        return view('produto.edit', compact('produto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validação dos dados do produto
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        // Encontra o produto pelo ID
        $produto = Produto::findOrFail($id);

        // Atualiza o produto
        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'categoria_id' => $request->categoria_id,
        ]);

        // Redireciona para a lista de produtos com mensagem de sucesso
        return redirect()->route('produto.index')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontra o produto pelo ID
        $produto = Produto::findOrFail($id);

        // Exclui o produto
        $produto->delete();

        // Redireciona para a lista de produtos com mensagem de sucesso
        return redirect()->route('produto.index')->with('success', 'Produto excluído com sucesso!');
    }
}
