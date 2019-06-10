@extends('layouts.template')

@section('title', 'Cadastre seu cartão')

@section('content')

    <div class="box">
        <div class="box-body">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Ops!</strong> Ocorreram os seguintes erros.<br><br>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif

            <form action="/cadastrar-cartao" method="post" class="form">
                @csrf
                <div class="form-group">
                    <label for="numero">Número do cartão</label>
                    <input type="number" id="numero" name="numero" class="form-control">
                </div>
                <div class="form-group">
                    <label for="data">Data de validade</label>
                    <input type="date" id="data" name="data" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cod_seg">Código de segurança</label>
                    <input type="number" id="cod_seg" name="cod_seg" class="form-control">
                </div>

                {{--<div class="form-group">--}}
                    {{--<label for="quantidade">Nome do titular</label>--}}
                    {{--<input type="text" id="titular" name="titular" class="form-control">--}}
                {{--</div>--}}

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

@stop