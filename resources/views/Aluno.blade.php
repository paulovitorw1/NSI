@extends('layout')
@section('conteudo')
<form id="caixa" class="center-block row col-xl-6" enctype="multipart/form-data" name="formulario"  method="POST" >
    <br>
    <div class="row p-0 no-margin col-12 col-sm-12  col-md-12 col-lg-10 col-xl-12" >
        <div class="form-group">
            <label for="sel1">Bloco:</label>

            <select class="form-control " name="id_local" id="bloco"  placeholder="ex: Bloco 3" >
                <option value="" disabled selected>Ex: Computação</option>
                @foreach($consultaLocal as $local)
                <option value="{{$local->id_local}}">{{$local->local_descricao}}</option>>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="sel1">O que:</label>
            <select select="required" class="form-control" name="id_ambiente" id="sel1" >
                <option value="" disabled selected>Ex: Laboratório</option>
                @foreach($consultaAmbiente as $ambiente)
                <option value="{{$ambiente->id_ambiente}}">{{$ambiente->ambiente_descricao}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="usr">Qual:</label>
            <input type="text" class="form-control" id="usr" name="oque" placeholder="Ex: Lab"  >
        </div>
    </div>
    <textarea id="noresize" class="form-control col-12 col-sm-12 mb-12 col-md-12 col-lg-10 col-xl-12 " name="denuncia_descricao" placeholder="Faça sua denúncia aqui... " rows="13"  autofocus="autofocus"></textarea>
    <br>
    <div id="botoes" class="row p-0 no-margin col-12 col-sm-12  col-md-12 col-lg-10 col-xl-12">
        <div class="botao p-0 no-margin col-6 col-sm-6 mb-3 col-md-6 col-lg-2 col-xl-10">
            <label class="file-upload btn btn-primary">
                Escolha o arquivo... <input type="file" name="uploaded_file" id="uploaded_file" >
            </label>
            <small class="form-text text-muted">As suas mensagens não serão totalmente anônimas.</small>
        </div>
        <div class="botao p-0 no-margin col-6 col-sm-6 mb-3 col-md-6 col-lg-10 col-xl-2 text-right ">
            <input type="hidden" name="enviar" value="enviar"/>
            <input id="b_enviar" type="submit" class="btn btn-success" value="Enviar"/>
        </div>
    </div>
</form>

<script src="{{ asset('js/aluno1.js') }}"></script>
<link rel="stylesheet"  type="text/css" href="{{ asset('css/aluno.css') }}">
@endsection
