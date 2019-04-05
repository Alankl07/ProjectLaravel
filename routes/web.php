<?php

Route::get('/', function () {
    return view('telalogin');
});

/* Rotas de funcionários */
Route::get('/listaFuncionarios', "FuncionarioController@index");
Route::post('/cadastro', "FuncionarioController@store");
Route::get('/cadastrar', "FuncionarioController@create");
Route::resource('funcionario', 'FuncionarioController');

/*Rotas dos cadastros para login */

Route::get('/cadastrar', "CadastroController@create");
Route::post('/cadastror', "CadastroController@store");
Route::post('/cadastro/login', "CadastroController@store");
Route::get('/funcionario', "CadastroController@index")->name('funcionario.index');
Route::resource('cadastro', 'CadastroController');

/*Rotas das salas */
Route::get('/sala', "SalaController@create");
Route::resource('sala', 'SalaController');

/*Rotas dos ministérios */
Route::get('/departamento', 'DepartamentoController@create');
Route::resource('departamento', 'DepartamentoController');


