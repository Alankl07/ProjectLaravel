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
            <form action="{{route('locacao.store')}}" method="POST" enctype="multipart/form-data">   
                @csrf    
                <div class="margem">
                    <h1 >Locação de Funcionários</h1>
                    <label for="nome">Nome do funcionário</label>
                    <input class="form-control" name="nome" id="nome" size=30>
                    <label for="sala">Número da sala</label>
                    <select class="form-control" name="sala" id="sala" >
                        @foreach($sala as $sa)
                            <option value={{$sa->id}}>{{$sa->numero_da_sala}}</option>
                        @endforeach
                    </select>
                    <label for="departamento">Departamento</label>
                    <select class="form-control" name="departamento" id="departamento">
                        @foreach($departamento as $dep)
                            <option value={{$dep->id}}>{{$dep->nome}}</option>
                        @endforeach
                    </select>
                    <button id="sala" class="btn btn-outline-light" type="submit" >Locar</button>
                </div>
            </form>
            </div>
            <div class = "col-md-4"></div>
        <div>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>