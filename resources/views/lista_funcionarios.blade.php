<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
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
      <th scope="col">Sexo</th>
      <th scope="col">Endereco</th>
      <th scope="col">RUB</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    @foreach($funcionarios as $fun)
        <tr>
            <td>{{$fun->nome}}</td>
            <td>{{$fun->sexo}}</td>
            <td>{{$fun->endereco}}</td>
            <td>{{$fun->rub}}</td>
            <td id="foto"><img src="../storage/{{$fun->foto}}"/></td>
            <td>
              <form action="{{route('funcionario.destroy', $fun)}}" method="POST">
                @csrf
                <a class = "btn btn-success" href="{{route('funcionario.edit', $fun)}}">Editar</a>
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