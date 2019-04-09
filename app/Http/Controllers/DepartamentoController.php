<?php

namespace App\Http\Controllers;

use App\departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dep = Departamento::all();
        return view('lista_departamento', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telacadastrardepartamento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dep = new Departamento();
        $dep->nome = $request->input('nome');
        $dep->coordenado = $request->input('coordenador');
        $dep->saladefuncionamento = $request->input('sala de funcionamento');
        $dep->save();
        return redirect()->route('departamento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(departamento $departamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, departamento $departamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(departamento $departamento)
    {
        //
    }
}
