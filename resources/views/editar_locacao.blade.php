<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Locação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <link href="{{asset('css/margem.css')}}" rel="stylesheet">
</head>
<body id="cadastro">
    
        <div class = "row">
            <div class = "col-md-4"></div>
            <div class = "col-md-4">
            <form action="{{route('locacao.update', $locacao)}}" method="POST" enctype="multipart/form-data">
                <div class="margem">
                @csrf  
                @method('PUT')
                    <h1 >Editar Locação</h1>
                    <label for="nome">Nome do funcionário</label>
                    <input class="form-control" name="nome" id="nome" size=30>
                    <label for="sala">Número da sala</label>
                    <input class="form-control" name="sala" id="sala" size=30>
                    <label for="departamento">Departamento</label>
                    <input class="form-control" name="departamento" id="departamento" size=30>
                    <button id="sala" class="btn btn-outline-light" type="submit" >Editar</button>
                </div>
            </form>
            </div>
            <div class = "col-md-4"></div>
        <div>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>