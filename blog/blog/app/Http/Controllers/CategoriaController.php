<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        // Criação da Categoria
        Categoria::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('categoria.index')->with('success', 'Categoria criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id); // Usar findOrFail para lançar exceção caso não encontre a categoria
        return view('categoria.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id); // Usar findOrFail para lançar exceção caso não encontre a categoria
        return view('categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validação
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $categoria = Categoria::findOrFail($id); // Usar findOrFail para lançar exceção caso não encontre a categoria

        // Atualização da Categoria
        $categoria->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('categoria.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id); // Usar findOrFail para lançar exceção caso não encontre a categoria

        // Excluir a Categoria
        $categoria->delete();

        return redirect()->route('categoria.index')->with('success', 'Categoria excluída com sucesso!');
    }
}
