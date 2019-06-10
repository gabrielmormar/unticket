@extends('layouts.template')

@section('title', 'Eventos disponíveis')

@section('content')
    <br>
    <h1>Eventos</h1>
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-striped table-hover ">
                <tr>
                    <th>Nome</th>git a
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
                            <a href="/apresentacao/{{$evento->id}}" class="btn btn-success">Apresentações</a>
                        </td>
                    </tr>
                @endforeach

            </table>
            {{ $eventos->links() }}
        </div>
    </div>

@stop