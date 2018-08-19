<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CAP - Cursos</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="bootstrap/css/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style2.css">


</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{url('/')}}">CAP</a>
        </div>
    </nav>

    <section class="portfolio mt-5" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-5">Eventos</h2>
            <div class="row">
                @foreach($eventos as $evento)
                    @php
                        $foto = $fotos->where('evento_id', '=', $evento->id)->first();
                     @endphp
                    <div class="bg-cursos rounded p-2 mb-4">
                        <div  style="float:left; height:190px; width: 170px; padding: 20px;">
                            <figure class="media">
                                <div class="img-wrap" style="height: 190px; width: 150px; overflow: hidden; position: absolute;">
                                    <img src="{{asset($foto->path)}}" class="img-fluid" alt="Imagem do Evento">
                                    </div>
                            </figure>
                        </div>
                        
                        <div style="float:left; padding: 15px;">
                            <h3 class="text-center mb-2">{{$evento->titulo}}</h3>
                            <div style="width: 850px">
                                <span class="titulo2">Descrição: </span>
                                <span class="texto-normal">{{$evento->descricao}}</span>
                            </div>

                            <div >
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
                        </div>
                    </div>
                @endforeach
                {{$eventos->render()}}
            </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <img width="70px" class="img-ecompjr" src="img/ecompjr-icon.png" alt="">
                <p>
                    </small>Copyright &copy;
                    <a href="https://github.com/EcompJr" target="_blank">EcompJr</a> 2018</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
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