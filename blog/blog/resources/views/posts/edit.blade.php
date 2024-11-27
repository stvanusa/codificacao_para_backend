<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Titulo</label>
        <input type="text" name="titulo" id="titulo" value="{{ $post->titulo }}">
        <label for="">Conteudo</label>
        <textarea name="conteudo" id="conteudo" >{{ $post->conteudo }}</textarea>
        <button type="submit">Salvar</button>
    </form>

</body>
</html>