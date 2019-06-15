{{--@extends('layouts.app')--}}
@extends('adminlte::page')

@section('content_header')
    <h1>Início</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                        {{--{{ session('status') }}--}}
                        {{--</div>--}}
                        {{--@endif--}}

                        @if(session()->has('msg'))
                            <div class="alert alert-success">
                                {{ session()->get('msg') }}
                            </div>
                        @endif

                        {{--Você está logado!--}}
                        {{--<div class="row">--}}
                            {{--<a href="/eventos" class="btn btn-primary col-md-3">Ver eventos</a>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<div class="row">--}}
                            {{--<a  href="/eventos/cadastro" class="btn btn-primary col-md-3">Cadastrar Evento</a>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<div class="row">--}}
                            {{--<a href="/ingressos/meus-ingressos" class="btn btn-primary col-md-3">Meus ingressos</a>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<div class="row">--}}
                            {{--<a href="/eventos/meus-eventos" class="btn btn-primary col-md-3">Meus eventos</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
