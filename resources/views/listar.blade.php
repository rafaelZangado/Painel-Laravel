<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar dados</title>
</head>
<body>
    <a href="{{route('cadastrar')}}">Cadastrar novo usuario</a>  

    <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>idade</th>
            <th>Ação</th>
           
        </tr>
        @foreach ($listar as $lista)
            <tr>
                <td>{{$lista->id}} </td>
                <td>{{$lista->nome}} </td>
                <td>{{$lista->idade}} </td>
                <td>
                    <a href="editar/{{$lista->id}}">Editar </a>| 
                    <a href="deletar/{{$lista->id}}">Deletar</a>               
                </td>
            </tr>          
        @endforeach
    </table>
</body>
</html>