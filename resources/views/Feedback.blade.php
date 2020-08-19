@extends('layout2')
@section ('conteudo')
<div class="card-header">Feedback</div>
<div class="card-body">
    <form method="POST" enctype="multipart/form-data" name="formulario" id="feedback">
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="primeiroNome">Nome</label>
                    <input type="text" class="form-control" id="primeiroNome" name="Nome" placeholder="Digite seu primeiro nome" >
                </div>
                <div class="col-md-6">
                    <label for="Sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="Sobrenome" name="Sobrenome" placeholder="Digite seu Sobrenome"  autofocus="autofocus">
                </div>
            </div>
            <div class="form-group" id="email">
                <label for="email">E-mail (opicional)</label>
                <input type="email" class="form-control"  name="email" placeholder="Digite seu email"  autofocus="autofocus">
            </div>
        </div>
            <textarea   id="noresize" class="form-control "  name="feedback_descricao" placeholder="Responda a denúncia aqui! "  rows="12"></textarea>
            <div id="botoes" class="row p-0 no-margin col-12 col-sm-12  col-md-12 col-lg-12 col-xl-12 ">
                <div class="botao p-0 no-margin col-6 col-sm-6 mb-3 col-md-6 col-lg-2 col-xl-10 ">
                    <label class="file-upload btn btn-primary">
                        Escolha o arquivo... <input  type="file" name="uploaded_file">
                    </label>  
                </div>
                <div class="botao p-0 no-margin  col-6 col-sm-6 mb-3 col-md-6 col-lg-10 col-xl-2 text-right ">
                    <input id="b_enviar" type="submit" class="btn btn-success" value="Enviar" name="enviar"/>
                </div>
                <small class="form-text text-muted">Agradecemos seu feedback e sua ajuda para construirmos um site melhor.</small>

            </div>
    </form>
</div>
<link rel="stylesheet" type="text/css" href="{{ asset('css/feedback.css') }}" >
<script src="{{ asset('js/feedback.js') }}"></script>
@endsection
