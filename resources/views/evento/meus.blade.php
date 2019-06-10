@extends('layouts.template')

@section('title', 'Meus Eventos')

@section('content')
    <br>
    <h2>Meus Eventos</h2>
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-striped table-hover ">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                @foreach ($eventos as $evento)
                    <tr>
                        <td>{{$evento->codigo}}</td>
                        <td>{{$evento->nome}}</td>
                        <td><a href="/eventos/edit/{{$evento->id}}" class="btn btn-primary">Editar</a></td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@stop