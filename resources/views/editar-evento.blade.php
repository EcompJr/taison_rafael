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
    
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('administrador')}}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{url('/gerir_eventos')}}">Eventos</a>
                </li>
                <li class="breadcrumb-item active">Editar Evento</li>
            </ol>

            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-edit"></i> {{$evento->titulo}}</div>
                <div class="card-body">
                    <form class="form" method="POST" action="{{url('/alterarEvento'.$evento->id)}}" enctype="multipart/form-data" class="registration-form">
                        @csrf
                        <label for="form-control">Alterar a imagem do evento:</label>
                        <div class="form-group" class="col-md-2" style="height: 150px; width: 150px;overflow: hidden">
                            <img src="{{asset($foto->path)}}" class="img-thumbnail img-sm">
                        </div>

                        <div class="form-group">
                            <input id="item" type="file" style="margin-bottom: 10px" name="imagem" accept="image/*" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="def-visual">Título:</label>
                            <input class="form-control" name="titulo" id="titulo" type="text" placeholder="Título do Evento" value="{{$evento->titulo or old(titulo)}}" required>
                        </div>

                        <div class="form-group">
                            <label for="def-visual">Descrição:</label>
                             <input class="form-control" type="texto-normal" name="descricao" id="descricao" cols="30" rows="5" placeholder="Descrição do Evento" value="{{$evento->descricao or old(descricao)}}" required>
                        </div>

                        <div class="form-group">
                            <label for="def-visual">Data:</label>
                             <input type="text" name="data" id="data" class="form-control col-5" placeholder="dd/mm/aaaa" data-mask="00/00/0000" value="{{$evento->data or old(data)}}" required>
                        </div>

                        <div class="form-group">
                            <label for="def-visual">Hora:</label>
                            <input class="form-control" name="hora" id="hora" type="text" placeholder="--:--" data-mask="00:00" value="{{$evento->hora or old(hora)}}" required>
                        </div>

                        <div class="form-group">
                            <label for="def-visual">Local:</label>
                           <input class="form-control" name="local" id="local" type="text" placeholder="Local do Evento" value="{{$evento->local or old(local)}}" required>
                        </div>

                        <div class="form-group">
                            <a href="{{url('/gerir_eventos')}}" class="btn btn-danger">Cancelar</a>
                            <button type="submit" class="btn btn-primary"> Salvar </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
        
        <!-- Bootstrap core JavaScript -->
        <script src="jquery/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="jquery/jquery.easing.min.js"></script>
        <script src="jquery/jquery.magnific-popup.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/jquery.mask.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/freelancer.min.js"></script>

    </div>
</body>

</html>