@extends('layout2')
@section('conteudo')
<div class="card-header">Registrar aluno</div>
<div class="card-body">
    <form method="POST"  id="form_registrar"  name="formulario">
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="primeiroNome">Nome</label>
                    <input type="text" class="form-control" id="primeiroNome" name="nome" placeholder="Digite seu primeiro nome" autofocus="autofocus">
                </div>
                <div class="col-md-6">
                    <label for="Sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="Sobrenome" name="sobrenome" placeholder="Digite seu Sobrenome"  autofocus="autofocus">
                </div>
            </div>
        </div>
        <div class="col-md-6" id="matricula">
            <label for="primeiroNome">Matrícula</label>
            <input type="text" class="form-control"  name="identificador" placeholder="Digite sua matrícula"  autofocus="autofocus">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email"  autofocus="autofocus">
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="password" placeholder="Digite sua senha"  autofocus="autofocus">
                </div>
                <div class="col-md-6">
                    <label for="confirma_senha">confirmar senha</label>
                    <input type="password"  class="form-control" id="confirmaSenha" name="password_confirmation" placeholder="Confirme sua senha"  autofocus="autofocus">
                </div>
            </div>
        </div>
        <div>
            <input type="submit" class="btn btn-primary btn-block" name="registrar" id ="registra_se" value="Registra-se"/>
        </div>
        <div class="text-center">
            <a href="#" class="d-block small mt-3">Esqueceu sua senha?</a>
            <a href="#" class="d-block small mt-3">Login?</a>
        </div>
    </form>
</div>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/registro.css') }}" >
    <script src="{{ asset('js/registrar-aluno.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @endsection
    
