<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicial', function(){
    return view('inicial');
});

Route::get('/listaFuncionarios', "FuncionarioController@index");
Route::post('/cadastro', "FuncionarioController@store");
Route::get('/cadastrar', "FuncionarioController@create");
Route::get('/cadastrar', "CadastroController@create");
Route::post('/cadastror', "CadastroController@store");
Route::post('/cadastro/login', "CadastroController@store");
Route::get('/funcionario', "CadastroController@index")->name('funcionario.index');
Route::resource('funcionario', 'FuncionarioController');
Route::resource('cadastro', 'CadastroController');
Route::get('/cadastrol', function(){
    return view('cadastro_login');
});
Route::get('/recuperar', function(){
    return view('recuperar_senha');
});

Route::get('/cadastro/cadastrar', function(){
    return view('cadastro_login');
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

