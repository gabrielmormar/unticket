@extends('layouts.template')

@section('title', 'Apresentações disponíveis')

@section('content')
    <br>
    <h1>Apresentação</h1>
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-striped table-hover ">
                <tr>
                    <th>Código</th>
                    <th>Sala</th>
                    <th>Data</th>
                    <th>Quantidade ingressos</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
                @foreach ($apresentacao as $apre)
                    <tr>
                        <td>{{$apre->codigo}}</td>
                        <td>{{$apre->sala}}</td>
                        <td>{{$apre->data}}</td>
                        <td width="50px">{{$apre->quantidade_ingressos}}</td>
                        <td width="50px">{{$apre->preco}}</td>
                        <td width="50">
                            <a href="/apresentacao/ingresso/{{$apre->id}}" class="btn btn-primary">Ingresso</a>
                        </td>
                    </tr>
                @endforeach

            </table>
            {{--{{ $apre->links() }}--}}
        </div>
    </div>

@stop