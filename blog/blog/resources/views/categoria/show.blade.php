@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes da Categoria</h2>

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <p id="nome">{{ $categoria->nome }}</p>
    </div>

    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <p id="descricao">{{ $categoria->descricao }}</p>
    </div>

    <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Voltar</a>
    <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
</div>
@endsection
