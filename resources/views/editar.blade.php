<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar</h1>
    <a href="{{route('listar')}}">Listar</a>  
    <form method="post" action="{{route('atualizar')}}"> 
        @csrf 
        <input type="text" name="nome" value="{{$editar->nome}}" placeholder="{{$editar->nome}}">
        <input type="text" name="idade" value="{{$editar->idade}}" placeholder="{{$editar->idade}}">
        <button>Salvar</button>
    </form>
    
</body>
</html>