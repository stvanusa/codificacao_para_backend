@extends('layouts.app')

@section('content')
    <h1>Tags</h1>
    
    <a href="{{ route('tags.create') }}" class="btn btn-primary mb-3">Criar Nova Tag</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $loop->iteration }}</td> <!-- Exibe o índice da iteração -->
                    <td>{{ $tag->nome }}</td> <!-- Nome da Tag -->
                    <td>
                        <!-- Botões de Ações -->
                        <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <!-- Formulário para Excluir Tag -->
                        <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta tag?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

