<?php

namespace App\Http\Controllers;

use App\CartaoCredito;
use Illuminate\Http\Request;

class CartaoCreditoController extends Controller
{

//    public function



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd();
        return view('cartao.cadastro');
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
    public function store(Request $request)
    {
//        dd(auth()->user()->id);
        $cartao = new CartaoCredito();
        $cartao->numero_cartao = $request->numero;
        $cartao->cod_seguranca = $request->cod_seg;
        $cartao->data_validade = $request->data;
        $cartao->usuario_id = auth()->user()->id;
        $cartao->save();

        return redirect()->action('HomeController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CartaoCredito  $cartaoCredito
     * @return \Illuminate\Http\Response
     */
    public function show(CartaoCredito $cartaoCredito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CartaoCredito  $cartaoCredito
     * @return \Illuminate\Http\Response
     */
    public function edit(CartaoCredito $cartaoCredito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CartaoCredito  $cartaoCredito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartaoCredito $cartaoCredito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CartaoCredito  $cartaoCredito
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartaoCredito $cartaoCredito)
    {
        //
    }
}
