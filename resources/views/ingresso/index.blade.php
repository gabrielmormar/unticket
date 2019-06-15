{{--@extends('layouts.template')--}}
@extends('adminlte::page')

@section('title', 'Ingresso')

@section('content_header')
    <h1>Comprar ingresso</h1>
@stop

@section('content')
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