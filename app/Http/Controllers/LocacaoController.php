<?php

namespace App\Http\Controllers;

use App\Locacao;
use App\Departamento;
use App\Sala;
use Illuminate\Http\Request;

class LocacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locacao = Locacao::all();
        return view('lista_locacao', compact('locacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $sala = Sala::all();
        $departamento = Departamento::all();
        return view('telalocacao', compact('sala', 'departamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $locacao = new Locacao();
        $locacao->nome_funcionario = $request->input("nome");
        $locacao->numero_da_sala = $request->input("sala");
        $locacao->departamento = $request->input("departamento");
        $locacao->save();
        return redirect()->route('locacao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function show(Locacao $locacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Locacao $locacao)
    {
        return view('editar_locacao', compact('locacao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locacao $locacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locacao $locacao)
    {
        $locacao->delete();
        return redirect()->route('locacao.index');
    }
}
