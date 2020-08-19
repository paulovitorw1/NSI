@extends('layout2')
@section('conteudo')
<div class="card-header">Registrar Administrador</div>
<div class="card-body">
<form method="POST"  id="form_administrador" name="formulario">
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu primeiro nome"  autofocus="autofocus">
            </div>
            <div class="col-md-6">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu Sobrenome"  autofocus="autofocus">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-6">
                <label for="matricula">Matrícula</label>
                <input type="text" class="form-control"  name="identificador" placeholder="Digite sua matrícula"  autofocus="autofocus">
            </div>
            <div class="col-md-6">
                <label for="permissao">Permissão</label>
                <select class="selectpicker form-control" name="permissao_registro_adm" id="number2-multiple" title="Ex: Administrador" data-hide-disabled="true" multiple data-actions-box="true">
                    @foreach($consultapermissao as $permissao)
                    <option value="{{$permissao->id_permissao}}">{{ $permissao->permissao_descricao}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email"  autofocus="autofocus">
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-6">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha"  autofocus="autofocus">
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
<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/bootstrap-select/dist/css/bootstrap-select.css') }}" >
<script src="{{ asset('js/registrar-administrador.js') }}"></script>
<script src="{{ asset('bootstrap/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@endsection

