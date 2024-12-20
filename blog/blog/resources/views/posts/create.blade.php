@extends('layouts.app')

@section('content')

    <form action="{{ route('posts.store') }}" method="post" id = "formCreatePost" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control form-control-lg">
        </div>
        
        <div class="mb-3">
            <select name="categoria" id="categoria_id">
            @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
            @endforeach
        </select>    
        </div>


        <div class="mb-3">
            <label for="conteudo" class="form-label">Conteúdo</label>
            <textarea name="conteudo" id="conteudo" class="form-control form-control-lg" rows="5"></textarea>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto">
        </div>
        <button id="btnCadastrar" type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <script>
        var titulo = document.getElementById('titulo').value;
        var foto = document.getElementById('foto')
        var formCreatePost = document.getElementById('formCreatePost')

        formCreatePost.addEventListener("submit", function(event) {

            if(!foto.files || !foto.files[0]){
                alert('Foto obrigatória!')
                event.preventDefault();
            }
        });
       
        
    </script>
    @endsection