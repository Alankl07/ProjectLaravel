<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
  <form  action="{{route('cadastro.create')}}">
    <button class="stil" type="submit">Pagina Inicial</button>
  </form>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sala de Funcionamento</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sala as $sal)
        <tr>
            <td>{{$sal->nome}}</td>
            <td>{{$sal->numero_da_sala}}</td>
            <td>  
              <form action="{{route('sala.destroy', $sal)}}" method="POST">
                @csrf
                <a class = "btn btn-success" href="{{route('sala.edit', $sal)}}">Editar</a>
                @method('DELETE')
                <button type="submit" class = "btn btn-danger">Excluir</button>
              </form>  
            </td>
        </tr>
    @endforeach
  </tbody>  
</table> 
</body>
</html>