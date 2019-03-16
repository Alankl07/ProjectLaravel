<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicial', function(){
    return view('inicial');
});

Route::get('/cadastrar', function(){
    return view('telacadastro');
});

Route::get('/departamento', function(){
    return view('telacadastrardepartamento');
});

Route::get('/sala', function(){
    return view('telacadastrosala');
});

Route::get('/inicio', function(){
    return view('telainicial');
});

Route::get('/login', function(){
    return view('telalogin');
});
