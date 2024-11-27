<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>

<body>
    <h1>Listagem de clientes</h1>
    <table class="tabela-customizada">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>foto</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->data_nascimento }}</td>
                <td>{{ $cliente->foto }}</td>
                <td>
                        <form action="{{ route('cliente.excluir' , $cliente->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Deseja realmente excluir esse cliente?')">Excluir</button>

                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>