@extends('layouts.app')

@section('content')
    <h1>Editar Tag</h1>

    <form action="{{ route('tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome da Tag</label>
            <input type="text" id="nome" name="nome" value="{{ $tag->nome }}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
