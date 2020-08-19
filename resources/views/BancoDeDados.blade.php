@extends('layout')
@section('conteudo')
<div class="form-group" id="div_selec_btn">
    <div class="form-row">
        <div class="col-7 col-sm-4 col-md-3 col-lg-3 col-xl-2">
            <select select="required" class="form-control" name="banco_de_dados" id="banco_de_dados_select" >
                <option value="" disabled selected>Ex: Laboratório</option>
                <option value="">Usuarios</option>
                <option value="">Local</option>
                <option value="">aaaaa</option>
            </select>
        </div>
        <div class="col-5 col-sm-8  col-md-9 col-lg-9 col-xl-10" id="div_novo_user">
            <button onclick="novoDado()" class="btn btn-info btn-xs" id="btn_novo_user" ><i class="glyphicon glyphicon-eye-open"></i>Novo</button> 
            <input type="hidden" id="idUserDelete" name="idUserDelete" value="">
        </div>
    </div> 
</div>
<!--Começo da tabela-->
<div class="card mb-3">
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered teste" id="tableBD" width="100%" cellspacing="0">
                            {{ method_field('POST') }}
                            <thead>
                                <tr>
                                    <th id="id_usuario">Nº</th>
                                    <th id="nome_bd">Nome</th>
                                    <th id="identificador_bd">Identificador</th>
                                    <th id="email_bd">E-mail</th>
                                    <th id="data_bd">Data de criação</th>
                                    <th id="acoes">Ações</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Atualizado ontem às </div>
            </div>
        </div>
    </div>
</div>
<!--Começo da tabela-->
@include('ModalEditarDados')
@include('ModalVisualizarDados')

<link rel="stylesheet"  type="text/css" href="{{ asset('css/banco-de-dados.css') }}">
<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('js/moment-with-locales.min.js') }}"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<script src="{{ asset('js/banco-de-dados.js') }}"></script>

@endsection

