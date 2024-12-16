@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Categoria</h2>
    <form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control form-control-lg" value="{{ old('nome', $categoria->nome) }}" placeholder="Digite o nome da categoria" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control form-control-lg" rows="5" placeholder="Digite a descrição da categoria" required>{{ old('descricao', $categoria->descricao) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
