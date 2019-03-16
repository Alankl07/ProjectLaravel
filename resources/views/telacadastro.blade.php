<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastrso de Funcionário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <link href="{{asset('css/margem.css')}}" rel="stylesheet">
</head>
<body id="cadastro">
    
        <div class = "row">
            <div class = "col-md-4"></div>
            <div class = "col-md-4">
            <form>       
                <div class="margem">
                    <h1 >Cadastro de Funcionários</h1>
                    <label for="nomef">Nome</label>
                    <input class="form-control" type="text" id="nomef" size=30
                    placeholder="Digite seu nome aqui!">
                    <label for="sexof">Sexo</label>
                    <input class="form-control" type="text" id="sexof" size=30>
                    <label for="enderecof">Endereço</label>
                    <input class="form-control" type="text" id="enderecof"  size=30>
                    <label for="rub">RUB</label>
                    <input class="form-control" type="text" id="rub" size=30>
                    <label for="foto">Foto: </label>
                    <input class = "margemf" type="file" id="foto"  size=30>
                    <button id="sala" class="btn btn-outline-light" type="button">Cadastrar</button>
                </div>
            </form>
            </div>
            <div class = "col-md-4"></div>
        <div>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>