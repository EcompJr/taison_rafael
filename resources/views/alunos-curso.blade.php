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
                    <a href="{{route('administrador')}}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{url('/gerir_cursos')}}">Cursos</a>
                </li>
                <li class="breadcrumb-item active">Alunos</li>
            </ol>

            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> {{ $curso->titulo }}</div>
                <div class="card-body">
                    @if(isset($inscritos) && $inscritos->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Formação Acadêmica</th>
                                    <th>Data Nascimento</th>
                                    <th>D.Visual</th>
                                    <!-- <th>OBS</th> -->
                                    <th>Material</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Formação Acadêmica</th>
                                    <th>Data Nascimento</th>
                                    <th>D.Visual</th>
                                    <!-- <th>OBS</th> -->
                                    <th>Material</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($inscritos as $inscrito)
                                <tr>
                                    <td>{{ $inscrito->nome}} {{ $inscrito->sobrenome }}</td>
                                    <td> {{ $inscrito->email }}</td>
                                    <td>{{ $inscrito->telefone }}</td>
                                    <td>{{ $inscrito->formacao }}</td>
                                    <td> {{ $inscrito->dataNascimento }}</td>
                                    <td>{{ $inscrito->deficiencia }}</td>
                                    <!-- <td>Cego</td> -->
                                    <td>{{ $inscrito->material }}</td>
                                </tr>
                                @endforeach
                                <!-- <tr>
                                    <td>José Ricardo Alves</td>
                                    <td>josericardo@gamil.com</td>
                                    <td>74999999999</td>
                                    <td>2º Grau</td>
                                    <td>04/25/1990</td>
                                    <td>Sim</td>
                                    <td>Cego</td>
                                    <td>Braille</td>
                                </tr>
                                <tr>
                                    <td>José Ricardo Alves</td>
                                    <td>josericardo@gamil.com</td>
                                    <td>74999999999</td>
                                    <td>2º Grau</td>
                                    <td>04/25/1990</td>
                                    <td>Sim</td>
                                    <td>Cego</td>
                                    <td>Braille</td>
                                </tr>
                                <tr>
                                    <td>José Ricardo Alves</td>
                                    <td>josericardo@gamil.com</td>
                                    <td>74999999999</td>
                                    <td>2º Grau</td>
                                    <td>04/25/1990</td>
                                    <td>Sim</td>
                                    <td>Cego</td>
                                    <td>Braille</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-primary">Gerar PDF</button>
                    @else
                        <div class="alert alert-danger">
                            <p>Nenhum inscrito no Momento</p>
                        </div>
                    @endif
                </div>
                <div class="card-footer small text-muted">Updated {{$lastpessoa->updated_at}}</div>
            </div>
        </div>

        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <img width="40px" class="img-ecompjr" src="/img/ecompjr-icon.png" alt="">
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
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div> -->
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

    </div>
</body>

</html>