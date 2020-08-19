@extends('layout')
@section('conteudo')
<!-- Grafico-->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-chart-area"></i>
        Gráfico de reclamações
    </div>
    <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">Atualizado em </div>
</div>
<!--Fim do grafico-->
<!-- Dados da Denúncia-->
<div class="card mb-3">
    <div id="wrapper">
        <input type="hidden" id="idDenunciaDelete" value="">
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tabela_moderador" width="100%"cellspacing="0">
                            <thead>
                                <tr>
                                    <th id="id_bd">Nº</th>
                                    <th id="matricula">Matrícula</th>
                                    <th id="nome">nome</th>
                                    <th id="date">Data - horas</th>
                                    <th id="comentario">Comentário</th>
                                    <th id="imagem">Imagem</th>
                                    <th id="acoes">Ações</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Atualizado em </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/moderador.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" >
<script src="{{ asset('bootstrap/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/moment-with-locales.min.js') }}"></script>

<link rel="stylesheet"  type="text/css" href="{{ asset('css/coord.css') }}">
<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>


@endsection
