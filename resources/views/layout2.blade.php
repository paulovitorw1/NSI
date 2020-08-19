<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8 ini_set('default_charset', 'UTF-8')">
    <meta name="viewport" content="width=device-width, initial-scale = 1, shrink-to-fit=no">
    <title>Núcleo de Informação e Sugestão Estudantil</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.nise.jpg') }}" type="image/x-icon">

    {{--Custom styles for this template--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin.min.css') }}" >
    {{-- Fontes personalizadas para este modelo css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/fontawesome-free/css/all.min.css') }}" >
    {{-- Bootstrap css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}" >
    {{-- token do laravel --}}
    <meta name="_token" content="{{ csrf_token() }}" />


    {{--Tabela e índice JavaScript do núcleo do Bootstrap--}}
    <script src="{{ asset('bootstrap/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- JavaScript do plugin principal--}}
    <script src="{{ asset('bootstrap/jquery-easing/jquery.easing.min.js') }}"></script>

</head>

<body class="bg-dark" id="overflow_body"style="background-image: url(img/logo.nsi.png);background-repeat:no-repeat;background-size: 18%;background-position: 16px 3px;overflow-y: hidden;">
    <div class="container row" id="registro" >
        <div class="card card-register mx-auto mt-5">

                @yield("conteudo")
        </div>
    </div>
    <!-- Modal HTML Erro -->
    <div id="myModalError" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Erro</h4>
                </div>
                <div class="modal-body">
                    <p class="text-warning"><small>erro ao enviar formulário </small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal HTML Sucesso -->
    <div id="myModalSucess" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sucesso </h4>
                </div>
                <div class="modal-body">
                    <p>Tarefas realizadas com sucesso. </p>
                    <p class="text-warning"><small>Formulário enviado com sucesso</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect waves-light" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim modal HTML Sucesso -->
</body>
</html>
