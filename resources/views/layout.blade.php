<!DOCTYPE html>
<html lang="pt-br">


<head>

    <meta charset="utf-8 ini_set('default_charset', 'UTF-8')">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>@yield("titulo",'Núcleo de Informação e Sugestão Estudantil') </title>
    {{--  <link rel="shortcut icon" href="{{ asset('img/logo.nise.png') }}" type="image/x-icon"/> --}}
    <link rel="shortcut icon" href="{{ asset('img/logo.nise.jpg') }}" type="image/x-icon">


    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    {{--Custom fonts for this template--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/fontawesome-free/css/all.min.css') }}">
    {{--Custom styles for this template--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin.css') }}">
    {{--Page level plugin CSS--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/datatables/dataTables.bootstrap4.css') }}">
    <meta name="_token" content="{{ csrf_token() }}" />


    {{--Tabela e índice JavaScript do núcleo do Bootstrap--}}
    <script src="{{ asset('bootstrap/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- JavaScript do plugin principal--}}
    <script src="{{ asset('bootstrap/jquery-easing/jquery.easing.min.js') }}"></script>
    {{-- Plug-in de nível de página JavaScript--}}
    <script src="{{ asset('bootstrap/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('bootstrap/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bootstrap/datatables/dataTables.bootstrap4.min.js') }}"></script>
    {{-- Scripts personalizados para todas as páginas--}}
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    {{-- Scripts de demonstração para esta página--}}
    <script src="{{ asset('bootstrap/demo/chart-area-demo.js') }}"></script>

    {{-- Script do modal --}}



    @yield("css_da_pagina")


</head>


<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="{{ route('rotaListPermissao') }}">NSI</a>
        <ul class="navbar-nav ml-auto ml-md-12">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7+</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">Sair</a>
                </div>
            </li>
        </ul>
    </nav>
    <!--Começo dos blocos-->
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <div id="row" class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden ">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">Ultima denúncia!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">Mais comentados: Bloco 3 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">Resolvendo!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5">Resolvido!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fim dos blocos-->

    @yield("conteudo")


    <footer class="sticky-footer sticky-footer col-0 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="container my-auto">
            <div class="copyright text-center my-auto ">
                <span>Copyright 2018 © NSI</span>
            </div>
        </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Encerrar Sessão</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deseja sair?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.php">Sair</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Logout Modal -->
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
                    <button type="button" class="btn btn-danger waves-effect waves-light"
                        data-dismiss="modal">Cancelar</button>
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
                    <button type="button" class="btn btn-success waves-effect waves-light"
                        data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim modal HTML Sucesso -->
    <!-- Modal IMAGEMN DENUCIA -->
    <div class="modal-dialog">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Imagem</h4>
                    </div>
                    <div class="modal-body text-center .row">
                        <img src="" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal para alert de error e sucesso-->
    <div id="MeuModalSucesso" class="modal fade">
        <div class="modal-dialog">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Erro ao enviar o fomulario!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <div id="MeuModalErro" class="modal fade">
        <div class="modal-dialog">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Erro ao alterar dados do usuario!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</body>

</html>