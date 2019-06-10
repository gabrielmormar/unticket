@extends('layouts.template')

@section('title', 'Ingresso')

@section('content')
    <br>
    <h1>Comprar ingresso</h1>
    <div class="box">
        <div class="box-body">

            @foreach ($dados as $dado)
                <div>Código: {{$dado->codigo}}</div>
                <div>Sala: {{$dado->sala}}</div>
                <div>Horário: {{$dado->hora}}</div>
                <div>Valor: {{$dado->preco}}</div>
            @endforeach
            <br>
            <form action="/ingresso/comprar/{{$dado->id}}" method="post">
                @csrf
                <button type="submit" class="btn btn-success">Comprar</button>
            </form>

        </div>
    </div>

@stop