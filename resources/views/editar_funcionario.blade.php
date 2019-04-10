<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Funcionário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <link href="{{asset('css/margem.css')}}" rel="stylesheet">
</head>
<body id="cadastro">
    
        <div class = "row">
            <div class = "col-md-4"></div>
            <div class = "col-md-4">
            <form action="{{route('funcionario.update', $funcionario)}}" method="POST" enctype="multipart/form-data">   
                  
                <div class="margem">
                @csrf  
                 @method('PUT') 
                    <h1 >Editar Funcionário</h1>
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" id="nome" name="nome" size=30
                    placeholder="Digite seu nome aqui!">
                    <label for="sexo">Sexo</label><br>
                    <select name="sexo"><legend>
                        <option class="form-control" name="sexo" values="Masculino" id="msexo"><label > -----------</label><br/>
                        <option class="form-control" name="sexo" values="Masculino" id="msexo"><label > Masculino</label><br/>
                        <option class="form-control" name="sexo" values="Feminino" id="fsexo"><label> Feminino</label>
                     </select><br>
                    <label for="endereco">Endereço</label>
                    <input class="form-control" type="text" id="endereco" name="endereco" size=30>
                    <label for="rub">RUB</label>
                    <input class="form-control" type="text" id="rub" name="rub" size=30>
                    <label for="foto">Foto: </label>
                    <input class = "form-control-file" type="file" id="foto" name="foto" size=30>
                    <button id="sala" class="btn btn-outline-light" type="submit">Editar</button>
                </div>
            </form>
            </div>
            <div class = "col-md-4"></div>
        <div>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>