<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>cadastrar</h1>
   
    <form method="post" action="{{route('salvar')}}"> 
        @csrf 
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="idade" placeholder="idade">
        <button>Salvar</button>
    </form>
    
</body>
</html>