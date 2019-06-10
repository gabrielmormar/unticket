<?php

namespace App\Http\Controllers;

use App\Apresentacao;
use App\Ingresso;
use Illuminate\Http\Request;

class IngressoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($apresentacao_id)
    {
        $dados = Apresentacao::findOrFail($apresentacao_id)->get();
//        dd($dados);
        return view('ingresso.index', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $apresentacao_id)
    {
        $apresentacao = Apresentacao::findOrFail($apresentacao_id);
//        dd($apresentacao);
        $apresentacao->quantidade_ingressos -= 1;
        $apresentacao->save();

        $ingresso = new Ingresso();
        $ingresso->apresentacao_id = $apresentacao_id;
        $ingresso->usuario_id = auth()->user()->id;
        $ingresso->save();

        return redirect()->action('HomeController@index')->with('msg', 'Ingresso Comprado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingresso  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingresso $ingresso)
    {
        $ingressos = Ingresso::where('usuario_id', auth()->user()->id)->get();
//        dd($ingressos);
        return view('ingresso.meus', compact('ingressos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingresso  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingresso $ingresso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingresso  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingresso $ingresso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingresso  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingresso $ingresso)
    {
        //
    }
}
