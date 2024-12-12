@extends('layouts.app')

@section('styles')
    
@endsection

@section('content')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->titulo }}</title>
    <!-- Inclua o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>{{ $post->titulo }}</h1>
    <p>{{ $post->conteudo }}</p>

    <!-- Ícone de Comentários -->
    <a href="#" data-bs-toggle="modal" data-bs-target="#comentarioModal">
        <i class="bi bi-chat-dots"></i> Comentários
    </a>

    <!-- Modal para comentar -->
    <div class="modal fade" id="comentarioModal" tabindex="-1" aria-labelledby="comentarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comentarioModalLabel">Deixe seu comentário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="comentarioForm" action="{{ route('comentarios.store', $post->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="texto" class="form-label">Comentário</label>
                            <textarea class="form-control" id="texto" name="texto" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Comentar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Lista de Comentários -->
    <h3>Comentários:</h3>
    <ul id="comentariosLista" class="list-group">
        @foreach ($post->comentarios as $comentario)
            <li class="list-group-item">{{ $comentario->texto }}</li>
        @endforeach
    </ul>
</div>

<!-- Inclua os scripts do Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Adiciona um listener de envio para o formulário de comentários
    document.getElementById('comentarioForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const texto = document.getElementById('texto').value;
        const postId = {{ $post->id }};
        
        // Envia o comentário para a rota que armazena o comentário
        fetch(`/post/${postId}/comentarios`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ texto })
        }).then(response => response.json())
          .then(data => {
              // Adiciona o comentário na lista
              const ul = document.getElementById('comentariosLista');
              const li = document.createElement('li');
              li.classList.add('list-group-item');
              li.textContent = texto;
              ul.appendChild(li);

              // Fecha o modal
              var modal = bootstrap.Modal.getInstance(document.getElementById('comentarioModal'));
              modal.hide();

              // Limpa o campo de texto
              document.getElementById('texto').value = '';
          });
    });
</script>




@endsection