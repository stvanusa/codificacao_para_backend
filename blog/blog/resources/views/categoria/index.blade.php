@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Categorias</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>
                    <td>{{ $categoria->descricao }}</td>
                    <td>
                        <!-- Visualizar -->
                        <button type="button">
                            <a href="{{ route('categoria.show', $categoria->id) }}">
                                <img src="{{ asset('storage/icones/visibility.png') }}" alt="Visualizar" style="width: 20px; height: 20px;">
                            </a>
                        </button>

                        <!-- Editar -->
                        <button type="button">
                            <a href="{{ route('categoria.edit', $categoria->id) }}">
                                <img src="{{ asset('storage/icones/edit.png') }}" alt="Editar" style="width: 20px; height: 20px;">
                            </a>
                        </button>

                        <!-- Excluir -->
                        <form action="{{ route('categoria.destroy', $categoria->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta categoria?')">
                                <img src="{{ asset('storage/icones/delete.png') }}" alt="Excluir" style="width: 20px; height: 20px;">
                            </button>
                        </form>

                        <!-- Atualizar -->
                        <button type="button">
                            <a href="{{ route('categoria.update', $categoria->id) }}">
                                <img src="{{ asset('storage/icones/update.png') }}" alt="Atualizar" style="width: 20px; height: 20px;">
                            </a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
