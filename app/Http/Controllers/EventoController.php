<?php

namespace App\Http\Controllers;

use App\Apresentacao;
use App\Evento;
use App\Http\Requests\EventoFormRequest;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::orderBy('created_at', 'desc')->paginate(5);
        return view('evento.eventos', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evento.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EventoFormRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoFormRequest $request)
    {
//        dd($request);
        $evento = new Evento();
        $evento->nome = $request->nome;
        $evento->codigo = $request->codigo;
        $evento->cidade_id = $request->cidade_evento;
        $evento->classe_evento_id = $request->classe_evento;
        $evento->faixa_etaria_id = $request->faixa_evento;
        $evento->user_id = auth()->user()->id;
        $evento->save();

        $apresentacao = new Apresentacao();
        $apresentacao->codigo = $request->cod_apresentacao;
        $apresentacao->data = $request->data_apresentacao;
        $apresentacao->hora = $request->horario_apresentacao;
        $apresentacao->preco = $request->valor_ingresso;
        $apresentacao->quantidade_ingressos = $request->qtd_ingressos;
        $apresentacao->sala = $request->sala_apresentacao;
        $apresentacao->evento_id = $evento->id;
        $apresentacao->save();

        return redirect()->action('HomeController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        $eventos = Evento::where('user_id', auth()->user()->id)->get();
//        dd($ingressos);
        return view('evento.meus', compact('eventos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento, $id)
    {
        $evento = Evento::findOrFail($id);
        $apresentacao = Apresentacao::where('evento_id', $id)->first();
        return view('evento.edit', compact('evento', 'apresentacao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(EventoFormRequest $request, Evento $evento, $id)
    {
        $evento = Evento::findOrFail($id);
        $apresentacao = Apresentacao::where('evento_id', $id)->first();

//        dd($apresentacao);
        $evento->nome = $request->nome;
        $evento->codigo = $request->codigo;
        $evento->cidade_id = $request->cidade_evento;
        $evento->classe_evento_id = $request->classe_evento;
        $evento->faixa_etaria_id = $request->faixa_evento;
        $evento->user_id = auth()->user()->id;
        $evento->save();

        $apresentacao->codigo = $request->cod_apresentacao;
        $apresentacao->data = $request->data_apresentacao;
        $apresentacao->hora = $request->horario_apresentacao;
        $apresentacao->preco = $request->valor_ingresso;
        $apresentacao->quantidade_ingressos = $request->qtd_ingressos;
        $apresentacao->sala = $request->sala_apresentacao;
        $apresentacao->evento_id = $evento->id;
        $apresentacao->save();

        return redirect()->action('HomeController@index')->with('msg', 'Evento atualizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
