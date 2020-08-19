@extends('layout')
@section('conteudo')
<!--Começo da tabela-->
<div class="card mb-3">
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th id="id_feedback">Nº</th>
                                    <th id="nome">Nome</th>
                                    <th id="email">E-mail</th>
                                    <th id="comentario">Comentário</th>
                                    <th id="data">Data - Horas</th>
                                    <th id="imagem">Imagem</th>
                                </tr>
                            </thead>
                            @foreach ( $consultaFeedback as $feedback   )
                            <tr>
                                <td> {{ $feedback->id_feedback }}</td>
                                <td> {{ $feedback->nome }} {{ $feedback->sobrenome }}</td>
                                <td> {{ $feedback->email}}</td>
                                <td> {{ $feedback->feedback_descricao}}</td>
                                <td> {{ date('d/m/Y H:i:s', strtotime($feedback->data_de_criacao)) }}</td>
                                <td> <a href="#" class="abrirModal"> <img class='img_denuncia' src="../../img_feedback/{{ $feedback->imagem }}"/> </a> </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Atualizado ontem às {{ date('d/m/Y H:i:s', strtotime($feedback->data_de_criacao)) }}</div>
            </div>
        </div>
    </div>
</div>
<!--Começo da tabela-->
<link rel="stylesheet"  type="text/css" href="{{ asset('css/feedback-lista.css') }}">
<script src="{{ asset('js/modal-img.js') }}"></script>


@endsection
