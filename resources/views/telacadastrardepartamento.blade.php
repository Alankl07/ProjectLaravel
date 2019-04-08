<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Departamento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
</head>
<body id="departamento">
        <div class = "col-md-4">
            <form action="{{route('departamento.store')}}" method="POST">
                <div id="interfacedepartamento">
                    <h1>Cadastrar Departamento</h1>
                    <label for="nome">Nome do Departamento</label>
                    <input name="nome" class="form-control" type="text" id="nome" size=30 >
                    <label for="cordenador"> Nome do Cordenador</label>
                    <input name="cordenador" class="form-control" type="text" id="cordenador" size=30>
                    <label for="sala">Sala de Funcionamento</label>
                    <input name="sala" class="form-control" type="numeric" id="sala" size=10>
                    <button id="sala" class="btn btn-outline-light" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>