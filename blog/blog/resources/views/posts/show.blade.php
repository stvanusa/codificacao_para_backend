@extends('layouts.app')

@section('title', 'Dados da Postagem')

@section('content')
    <h1>Dados da Postagem</h1>
    <p>Título: {{ $post->titulo }}</p>
    <p>Conteúdo: {{ $post->conteudo }}</p>
@endsection
