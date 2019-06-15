{{--@extends('layouts.template')--}}
@extends('adminlte::page')

@section('title', 'Meus ingressos')

@section('content_header')
    <h1>Meus ingresso</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-striped table-hover ">
                <tr>
                    <th>Apresentação</th>
                    <th>Usuário</th>
                </tr>
                @foreach ($ingressos as $ingresso)
                    <tr>
                        <td>{{$ingresso->apresentacao_id}}</td>
                        <td>{{$ingresso->usuario_id}}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@stop