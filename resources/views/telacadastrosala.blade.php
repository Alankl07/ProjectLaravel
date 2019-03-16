<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro da Sala do Ministério</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body id="telasala">
<h1 class="interfacesala">Cadastro da Sala do Ministério</h1>
    <div class="col-md-4">
        <form>
            <div class="interfacesala">
                <label for="nome">Nome do Ministério</label>
                <input class="form-control" type="text" id="nome" size=30>
                <label for="cordenador">Cordenador do Ministério</label>
                <input class="form-control" type="text" id="cordenador" size=30> 
                <label for="salafuncionamento">Sala de Funcionamento</label>
                <input class="form-control" type="text" id="salafuncionamento" size=30>  
                <button id="sala" type="button" class="btn btn-outline-light">Cadastrar</button>  
            </div>
        </form>
    <div>
</body>
</html>