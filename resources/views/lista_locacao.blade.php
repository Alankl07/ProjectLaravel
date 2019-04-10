<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body >
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome do Funcionário</th>
      <th scope="col">Número da sala</th>
      <th scope="col">Departamento</th>
  </thead>
  <tbody>
    <form  action="{{route('cadastro.create')}}">
      <button class="stil" type="submit">Pagina Inicial</button>
    </form>
    @foreach($locacao as $loc)
        <tr>
            <td>{{$loc->nome_funcionario}}</td>
            <td>{{$loc->numero_da_sala}}</td>
            <td>{{$loc->departamento}}</td>
            <td>
              <form action = "{{route('locacao.destroy', $loc)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('locacao.edit', $loc)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
              </form>  
            </td>
        </tr>
    @endforeach
  </tbody>  
</table> 
</body>
</html>