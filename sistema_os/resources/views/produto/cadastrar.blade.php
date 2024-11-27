<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleform.css')}}">
    <title>Document</title>
</head>
<body>
    <form action="{{route('produto.store')}}" method ="post"> 
        @csrf
    <label for="">Nome</label>
    <input type="text" name="nome" id="nome"> 
    <label for="">Valor</label>
    <input type="text" name="valor" id="valor">
    <label for="">Descrição</label>
    <input type="text" name="descricao" id="descricao">
    <label for="">Data Validade</label>
    <input type="date" name="data_validade" id="data_validade">
    <input type="hidden" name="categoria_id" value="0">
    <button type="submit">Salvar</button>

    </form>
</body>
</html> 