{{--@extends('layouts.template')--}}
@extends('adminlte::page')

@section('title', 'Eventos disponíveis')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content')

    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-striped table-hover ">
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
                @foreach ($eventos as $evento)
                    <tr>
                        <td>{{$evento->nome}}</td>
                        <td>{{$evento->codigo}}</td>
                        <td width="50px">{{$evento->cidade_id}}</td>
                        <td width="250px">
                            <a href="/apresentacao/{{$evento->id}}" class="btn btn-success">Ver apresentações</a>
                        </td>
                    </tr>
                @endforeach

            </table>
            {{ $eventos->links() }}
        </div>
    </div>

@stop