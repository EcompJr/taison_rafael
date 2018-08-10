<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Perfil Admin</title>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="bootstrap/css/magnific-popup.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style2.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->

    @include('layouts.header_administrador')
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="/">CEP</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="perfil-admin">
                        <i class="fa fa-fw fa-home"></i>
                        <span class="nav-link-text">Home</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="cursos-admin">
                        <i class="fa fa-fw fa-list-ul"></i>
                        <span class="nav-link-text">Cursos</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="eventos-admin">
                        <i class="fa fa-fw fa-th-list"></i>
                        <span class="nav-link-text">Eventos</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="administradores">
                        <i class="fa fa-fw fa-users"></i>
                        <span class="nav-link-text">Administradores</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="mensagens">
                        <i class="fa fa-fw fa-envelope"></i>
                        <span class="nav-link-text">Mensagens</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav> -->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active">Eventos</li>
            </ol>


            <div class="container">
                <div class="row">
                     <button class="btn btn-warning mb-1" data-toggle="modal" data-target="#modalCadastro">Adicionar Evento</button>
                    @foreach($eventos as $evento)
                        <table class="table table-hover shopping-cart-wrap bg-cursos">
                            
                            <tbody>
                                <tr>
                                    <div class="bg-cursos rounded p-0 mb-2">
                                        <td>
                                            <figure class="media">
                                                <div class="img-wrap" style="float:left; height: 150px; width: 150px">
                                                    <img src="img/nordeste.jpg" class="img-thumbnail img-sm">
                                                </div>
                                            </figure>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="titulo2">Descrição: </span>
                                                <span class="texto-normal">{{$evento->descricao}}</span>

                                            </div>
                                            <div>
                                                <span class="titulo2">Data: </span>
                                                <span class="texto-normal">{{$evento->data}}</span>

                                            </div>
                                            <div>
                                                <span class="titulo2">Hora: </span>
                                                <span class="texto-normal">{{$evento->hora}}</span>

                                            </div>
                                            <div>
                                                <span class="titulo2">local: </span>
                                                <span class="texto-normal">{{$evento->local}}</span>

                                            </div>
                                            <div class="text-center mt-3">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditar">Editar Evento</button>
                                                <button class="btn btn-danger">Apagar Evento</button>
                                            </div>
                                        </td>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <img width="40px" class="img-ecompjr" src="img/ecompjr-icon.png" alt="">
                        </small>Copyright &copy;
                        <a href="https://github.com/EcompJr" target="_blank">EcompJr</a> 2018
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo sair?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Confirme se deseja sair.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary" href="login.html">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cadastrar Modal-->
            <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastro" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cadastrar Evento</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{url('/criar/evento')}}">
                                @csrf
                                    <div class="form-group">
                                        <input class="form-control" id="titulo" type="text" placeholder="Título do Evento">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" name="hora" id="hora" type="time" placeholder="Horário">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="local" id="local" type="text" placeholder="Local do Evento">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="texto-normal" name="descricao" id="descricao" cols="30" rows="5" placeholder="Descrição do Evento">
                                    </div>
                                    <div class="form-group">
                                        <label for="data">Data do Evento</label>
                                        <input type="date" name="data" id="data" class="form-control col-5">
                                    </div>

                                     <div class="modal-footer">
                                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Editar Modal-->
            <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditar" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar Evento</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <input class="form-control" id="titulo" type="text" placeholder="Título do Evento" value="Lorem, ipsum dolor emque">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="pub-alvo" type="text" placeholder="Público Alvo" value="Todos">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="hora" type="text" placeholder="Horário" value="8:00">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="local" type="text" placeholder="Local do Evento" value="CAP">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Objetivo do Curso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis cumque libero aperiam perferendis facere nulla, eaque inventore provident amet accusantium neque? Nostrum, dolorum ab aliquam sit eius corrupti earum odit.</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="data">Data do Evento</label>
                                    <input type="date" id="data" class="form-control col-5" value="2011-01-01">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="jquery/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="jquery/jquery.easing.min.js"></script>
        <script src="jquery/jquery.magnific-popup.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/freelancer.min.js"></script>

</body>

</html>