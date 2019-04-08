<?php

namespace App\Http\Controllers;

use App\cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = Cadastro::all();
        return view('lista_login', compact('cadastros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telainicial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = new Cadastro();
        $cadastro->herarquia = $request->input('herarquia');
        $cadastro->nome = $request->input('nome');
        $cadastro->sexo = $request->input('sexo');
        $cadastro->endereco = $request->input('endereco');
        $cadastro->rub = $request->input('rub');
        $cadastro->foto = $request->input('foto');
        $cadastro->save();
        return redirect()->route('cadastro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function show(cadastro $cadastro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function edit(cadastro $cadastro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cadastro $cadastro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function destroy(cadastro $cadastro)
    {
        //
    }
}
