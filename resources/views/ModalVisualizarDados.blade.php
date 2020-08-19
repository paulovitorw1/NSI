<div class="modal fade bd-example-modal-xl" id="meuModalView" tabindex="-1" role="dialog"
aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="card-header">Visualizar dados do usuário</div>
        <div class="card-body">
            <form method="POST" id="visualizar_dados" name="visualizar_dados">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome_banco_view" name="nome_banco_view"
                            placeholder="Digite seu primeiro nome" autofocus="autofocus">
                        </div>
                        <div class="col-md-6">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome_banco_view"
                            name="sobrenome_banco_view" placeholder="Digite seu Sobrenome"
                            autofocus="autofocus">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="matricula">Matrícula</label>
                            <input type="text" class="form-control" id="identificadorView" name="identificador"
                            placeholder="Digite sua matrícula" autofocus="autofocus">
                        </div>
                        <div class="col-md-6">
                            <label for="permissao_banco_view">Permissão</label>
                            <input type="text" class="form-control permissao_view" id="permissao_banco_view"
                            placeholder="Digite sua matrícula" autofocus="autofocus">                                
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="emailView" name="email" placeholder="Digite seu email"
                autofocus="autofocus">
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="data_de_criacao_view">Data de criação</label>
                        <input type="text" class="form-control" id="data_de_criacao_view" name="data_de_criacao_view"
                        placeholder="Digite seu primeiro nome" autofocus="autofocus">
                    </div>
                    <div class="col-md-6">
                        <label for="data_atualizacao_view">Data de atualização</label>
                        <input type="text" class="form-control" id="data_atualizacao_view"
                        name="data_atualizacao_view" placeholder="Digite seu Sobrenome"
                        autofocus="autofocus">
                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/bootstrap-select/dist/css/bootstrap-select.css') }}">
<script src="{{ asset('bootstrap/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
{{--  <script src="{{ asset('js/banco-de-dados.js') }}"></script> --}}