<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Sala do Ministério</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body id="telasala">
<h1 class="interfacesala">Editar Sala do Ministério</h1>
    <div class="col-md-4">
        <form action="{{route('sala.update', $sala)}}" method="POST">
            @csrf 
            @method('PUT')
            <div class="interfacesala">
                <label for="nome">Nome do Ministério</label>
                <input name="nome" class="form-control" type="text" id="nome" size=30>
                <label for="salafuncionamento">Sala de Funcionamento</label>
                <input name="sala" class="form-control" type="text" id="salafuncionamento" size=30>  
                <button id="sala" type="submit" class="btn btn-outline-light">Editar</button>  
            </div>
        </form>
    <div>
</body>
</html>