@extends('layouts.app')

@section('content') 
        <div class="container">
            <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/'.$post->foto)}}" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->titulo}}</h5>
                        <p class="card-text">{{$post->conteudo}}</p>
                        <form action="{{route('posts.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form> 
                        <button type="button" class="btn btn-success"><a href="{{ route('posts.edit', $post->id) }}">Editar</a></button>
                        <button type="button" class="btn btn-success"><a href="{{ route('posts.show', $post->id) }}">Visualizar</a></button>

                    </div>
                </div>
            |</div>
            @endforeach
        </div>
    </div>
@endsection
