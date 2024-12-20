@extends('layouts.app')

@section('content')
    <h1>Detalhes da Tag</h1>

    <p>Nome: {{ $tag->nome }}</p>

    <a href="{{ route('tags.index') }}">Voltar para a lista</a>
@endsection

