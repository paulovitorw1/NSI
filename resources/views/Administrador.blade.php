@extends('layout')
@section('conteudo')
<form id="caixa" class="center-block row col-xl-6" enctype="multipart/form-data" name="formulario" method="POST">
    <br>
    <textarea id="noresize" class="form-control col-12 col-sm-12 mb-12 col-md-12 col-lg-10 col-xl-12"  name="resposta_descricao" placeholder="Responda a denúncia aqui! "  rows="12"></textarea>
    <br>
    <div id="botoes"class="row p-0 no-margin col-12 col-sm-12  col-md-12 col-lg-10 col-xl-12">
        <div class="botao p-0 no-margin col-6 col-sm-6 mb-3 col-md-6 col-lg-2 col-xl-10">
            <label class="file-upload btn btn-primary">
                Escolha o arquivo... <input  type="file" name="uploaded_file">
            </label>
            <small class="form-text text-muted">###############################.</small>
        </div>
        <div class="botao p-0 no-margin col-6 col-sm-6 mb-3 col-md-6 col-lg-10 col-xl-2 text-right ">
            <input type="hidden" name="enviar" value="enviar"/>
            <input id="b_enviar" type="submit" class="btn btn-success" value="Enviar" name="enviar"/>
        </div>
    </div>
</form>
<br>
<!--Fim da caixa-->
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
                                    <th id="id_bd">Nº</th>
                                    <th id="date">Data e hora</th>
                                    <th id="comentario">Comentário</th>
                                    <th id="imagem">Imagem</th>
                                </tr>
                            </thead>
                            @foreach ( $consultaDenuncia as $den   )
                            <tr>
                                <td> {{ $den->id_denuncia }}</td>
                                <td> {{ date('d/m/Y H:i:s', strtotime($den->data_de_criacao)) }}</td>
                                <td> <b>{{ $den->local_descricao}} - {{ $den->ambiente_descricao }}: {{ $den->oque}}: </b>{{ $den->denuncia_descricao}}</td>
                                <td> <a href="#" class="abrirModal"> <img class="img_denuncia" src="img_denuncia/{{ $den->imagem }}"/> </a> </td>
                            </tr>
                            @endforeach
                            http://localhost:8000/img_denuncia/1566507215.png
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Atualizado em {{ date('d/m/Y H:i:s', strtotime($den->data_de_criacao)) }}</div>
            </div>
        </div>
    </div>
</div>
<!--Começo da tabela-->
<link rel="stylesheet"  type="text/css" href="{{ asset('css/coord.css') }}">
<script src="{{ asset('js/aluno1.js') }}"></script>
<script src="{{ asset('js/modal-img.js') }}"></script>


@endsection
