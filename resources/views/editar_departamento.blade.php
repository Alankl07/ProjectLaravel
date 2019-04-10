<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <title>Editar Departamento</title>
</head>
<body id="departamento"  >
    <form action="{{route('departamento.update', $departamento)}}" method="POST">
        <div id="interfacedepartamento">
        @csrf  
        @method('PUT')
            <h1>Editar Departamento</h1>
             <label for="nome">Nome do Departamento</label>
             <input name="nome" class="form-control" type="text" id="nome" size=30 >
             <label  for="coordenador"> Nome do Cordenador</label>
             <input name="coordenador" class="form-control" type="text" id="coordenador" size=30>
             <label for="sala">Sala de Funcionamento</label>
             <input name="sala" class="form-control" type="text" id="sala" size=30 >
            <button id="sala" class="btn btn-outline-light" type="submit">Editar</button>
        </div>
    </form>
</body>
</html>