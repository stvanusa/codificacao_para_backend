<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
    
</head>

<body>
    <h1> Listagem de Produtos</h1>
    <table class="tabela-customizada"> 
        <thead>
            <th>nome</th>
            <th>valor</th>
            <th>Descrição</th>
            <th>data_validade</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($produto as $produto)
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->valor }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->data_validade }}</td>
                <td>
                        <form action="{{ route('produto.excluir' , $produto->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Deseja realmente excluir esse produto?')">Excluir</button>

                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>

</body>

</html>