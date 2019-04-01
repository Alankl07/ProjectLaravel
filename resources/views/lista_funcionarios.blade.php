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
      <th scope="col">Sexo</th>
      <th scope="col">Endereco</th>
      <th scope="col">RUB</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    @foreach($funcionarios as $prod)
        <tr>
            <td>{{$prod->nome}}</td>
            <td>{{$prod->sexo}}</td>
            <td>{{$prod->endereco}}</td>
            <td>{{$prod->rub}}</td>
            <td>{{$prod->foto}}</td>
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