@extends('layouts.template')

@section('title', 'Cadastre seu Evento')

@section('content')

    <div class="row">
        <p>Cadastro de Evento</p>
    </div>

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

            <form action="/eventos/store" method="post" class="form">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descricao">Código</label>
                    <input type="number" id="codigo" name="codigo"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="cidade_evento">Cidade do Evento</label>
                    <input type="number" id="cidade_evento" name="cidade_evento"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="classe_evento">Classe do Evento</label>
                    <input type="number" id="classe_evento" name="classe_evento"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="faixa_evento">Faixa etária do Evento</label>
                    <input type="number" id="faixa_evento" name="faixa_evento"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="cod_apresentacao">Código da apresentacao</label>
                    <input type="number" id="cod_apresentacao" name="cod_apresentacao"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="data_apresentacao">Data da apresentação</label>
                    <input type="date" id="data_apresentacao" name="data_apresentacao"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="horario_apresentacao">Horário da apresentação</label>
                    <input type="text" id="horario_apresentacao" name="horario_apresentacao"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="valor_ingresso">Valor do Ingresso</label>
                    <input type="number" id="valor_ingresso" name="valor_ingresso"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="qtd_ingressos">Quantidade de ingressos</label>
                    <input type="number" id="qtd_ingressos" name="qtd_ingressos"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="sala_apresentacao">Sala da apresentação</label>
                    <input type="number" id="sala_apresentacao" name="sala_apresentacao"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>


@stop