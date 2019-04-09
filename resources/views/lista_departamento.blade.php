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
      <th scope="col">Nome</th>
      <th scope="col">Cooredenado</th>
      <th scope="col">Sala de Funcionamento</th>
  </thead>
  <tbody>
    <form  action="{{route('cadastro.create')}}">
      <button class="stil" type="submit">Pagina Inicial</button>
    </form>
    @foreach($dep as $de)
        <tr>
            <td>{{$de->nome}}</td>
            <td>{{$de->coordenador}}</td>
            <td>{{$de->numero_da_sala}}</td>
            <td>
              <form action = "{{route('departamento.destroy', $de)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('departamento.edit', $de)}}">Editar</a>
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