<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleform.css')}}">
    <title>Document</title>
</head>
<body>
<body>
    
    <form action="{{ route('cliente.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required> 

        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>

        <label for="foto">Foto</label>
        <input type="file" name="foto" id="foto" accept="image/*">

        <button type="submit">Salvar</button>
    </form>
    
</body>

</body>
</html> 