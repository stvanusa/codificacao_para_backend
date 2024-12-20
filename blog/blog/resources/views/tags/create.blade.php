@extends('layouts.app')

@section('content')
    <h1>Criar Tag</h1>

    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome da Tag</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
