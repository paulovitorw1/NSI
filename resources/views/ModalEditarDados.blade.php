<div class="modal fade bd-example-modal-xl" id="meuModalEditar" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="card-header">Editar dados do usuário</div>
            <div class="card-body">
                <form method="POST" id="form_registro_banco" name="form_registro_banco">
                    <input type="hidden" id="idUser" name="idUser" value="">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome_editar" name="nome_editar"
                                    placeholder="Digite seu primeiro nome" autofocus="autofocus">
                            </div>
                            <div class="col-md-6">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome_editar" name="sobrenome_editar"
                                    placeholder="Digite seu Sobrenome" autofocus="autofocus">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="matricula">Matrícula</label>
                                <input type="text" class="form-control" id="identificador_editar" name="identificador"
                                    placeholder="Digite sua matrícula" autofocus="autofocus">
                            </div>
                            <div class="col-md-6">
                                <label for="permissao_editar">Permissão</label>
                                <select class="selectpicker form-control limpaaa" name="permissao_editar[]"
                                    id="permissao_editar" title="Ex: Administrador" data-hide-disabled="true" multiple
                                    data-actions-box="true">
                                    @foreach($consultapermissao as $permissao)
                                    <option value="{{$permissao->id_permissao}}">{{ $permissao->permissao_descricao}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email_editar" name="email"
                            placeholder="Digite seu email" autofocus="autofocus">
                    </div>
                    <div class="form-group" id="senhas">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Digite sua senha" autofocus="autofocus">
                            </div>
                            <div class="col-md-6">
                                <label for="confirma_senha">confirmar senha</label>
                                <input type="password" class="form-control" id="confirmaSenha"
                                    name="password_confirmation" placeholder="Confirme sua senha" autofocus="autofocus">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="datas_visualizacao">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="data_de_criacao">Data de criação</label>
                                <input type="text" class="form-control" id="data_de_criacao" name="data_de_criacao"
                                    placeholder="Digite seu primeiro nome" autofocus="autofocus">
                            </div>
                            <div class="col-md-6">
                                <label for="data_atualizacao">Data de atualização</label>
                                <input type="text" class="form-control" id="data_atualizacao" name="data_atualizacao"
                                    placeholder="Digite seu Sobrenome" autofocus="autofocus">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="registrar_editar" id="registrar_editar"
                            value="">Editar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="Reset" onclick="limpar_form();" class="btn btn-info">Limpar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/bootstrap-select/dist/css/bootstrap-select.css') }}">
<script src="{{ asset('bootstrap/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
{{--  <script src="{{ asset('js/banco-de-dados.js') }}"></script> --}}