<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="titulo" id="titulo">
        <label for="">Conteudo</label>
        <textarea name="conteudo" id="conteudo"></textarea>
        <button type="submit">Salvar</button>
    </form>


</body>
</html>