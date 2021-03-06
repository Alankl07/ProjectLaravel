<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tela Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body id="telainicial">
    <nav id="menu" >
        <h1>Sejam bem-vindo seus Bruxos</h1>
        <ul >
            <li><a href="{{route('funcionario.create')}}">Cadastrar Funcionário</a></li>
            <li><a href="{{route('departamento.create')}}">Cadastrar Departamento</a></li>
            <li><a href="{{route('locacao.create')}}">Locar Funcionários</a></li>
            <li><a href="{{route('sala.create')}}">Cadastra Sala</a></li>
        </ul>
    </nav>
    <div id="textoinicial" class="col-md-4">
        <p>
            Olá seus bruxos, tudo bem? sejam bem-vindos
            a escola Hogwarts, esse site foi feito para
            ajudalos na organização da escola visando o
            bem-estar do usuário, use e abuse dessa orbra
            de arte feita por nós os bruxões da TI, aproveitem.
        </p>
        <div class="lista">
                 <h2 class="titu">Listas</h2>
                <a href="{{route('funcionario.index')}}">Lista de Funcionários</a><br>
                <a href="{{route('sala.index')}}">Lista de Salas</a><br>
                <a href="{{route('departamento.index')}}">Lista de Departametno</a><br>
                <a href="{{route('locacao.index')}}">Lista de Locação</a>
        </div>
    </div>
</body>
</html>