<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Cooredenado</th>
      <th scope="col">Sala de Funcionamento</th>
  </thead>
  <tbody>
    @foreach($departametnos as $dep)
        <tr>
            <td>{{$dep->nome}}</td>
            <td>{{$dep->coordenador}}</td>
            <td>{{$dep->saladefuncionamento}}</td>
            <td>
              <form>
                <a class = "btn btn-success">Editar</a>
                <a class = "btn btn-danger">Excluir</a>
              </form>  
            </td>
        </tr>
    @endforeach
  </tbody>  
</table> 
</body>
</html>