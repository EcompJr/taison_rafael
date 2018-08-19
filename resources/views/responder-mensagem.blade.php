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
                    <a href="{{url('/mensagens')}}">Mensagens</a>
                </li>
                <li class="breadcrumb-item active">{{$mensagem->assunto}}</li>
            </ol>

            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-envelope-open"></i> Mensagem</div>
                
                <div class="card-body">
                    <form class="form" method="POST" action="{{url('/responderMensagem'.$mensagem->id)}}">
                        @csrf
                        <div class=" bg-cursos card-header">
                            <span class="texto-normal">Assunto: {{$mensagem->assunto}}</span>
                        </div>

                        <div class="bg-cursos rounded p-3 mb-4">
                            <div class="mb-4">
                                <i class=" card-header fa fa-user"></i> 
                                <span>  <b>{{$mensagem->nome}}</b> </span>
                                <<span> {{$mensagem->email}} </span>>
                                <span>para mim</span>
                            </div>

                            <div>
                                <span style="font-weight: normal; margin: 56px">  {{$mensagem->mensagem}} </span>
                            </div>
                        </div>

                        @if($mensagem->respondido == true)
                            <div class="bg-cursos rounded p-3 mb-4">

                                <div class="mb-4">
                                    <i class=" card-header fa fa-reply"></i>
                                    <span>  <b>{{Auth::user()->administrador->nome}}</b> </span>
                                    <<span> {{Auth::user()->email}} </span>>
                                    <span> para {{$mensagem->nome}} </span>
                                </div>

                                <div>
                                    <span style="font-weight: normal; margin: 56px">  {{$mensagem->resposta}} </span>
                                </div>
                            </div>

                        @else
                            <div class="form-group">
                                <div class="card-header">
                                    <i class="fa fa-reply"></i>
                                    <span>{{$mensagem->nome}}</span>
                                </div>
                                <textarea name="resposta" class="form-control" id="" cols="30" rows="5" placeholder="Responder Mensagem" required></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success fa fa-reply"> Responder </button>
                            </div>
                        @endif
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