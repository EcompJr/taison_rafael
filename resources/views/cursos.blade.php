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
            <h2 class="text-center text-uppercase text-secondary mb-5">Cursos Ofertados</h2>
            <div class="row">
                @foreach($cursos as $curso)
                    <div class="bg-cursos rounded p-3 mb-4">
                        <h4 class="text-center mb-4">{{$curso->titulo}}</h4>
                        
                        <div>
                            <span class="titulo2">Carga Horária: </span>
                            <span class="texto-normal">{{$curso->horasCurso}}</span>
                        </div>

                        <div>
                             <span class="titulo2">Vagas: </span>
                            <span class="texto-normal">{{$curso->vagas}}</span>
                        </div>

                        <div>
                            <span class="titulo2">Data: </span>
                            <span class="texto-normal">{{$curso->data}}</span>
                         </div>

                        <div>
                            <span class="titulo2">Turno: </span>
                            <span class="texto-normal">{{$curso->turno}}</span>         
                        </div>

                        <div>
                           <span class="titulo2">Período da Inscrição: </span>
                            <span class="texto-normal">{{$curso->periodoInscricao}}</span>
                        </div>

                        <div>
                            <span class="titulo2">Local: </span>
                            <span class="texto-normal">{{$curso->local}}</span>
                        </div>

                        <div class="text-left mt-3">
                            @guest
                            <a href="{{url('/cadastrar'.$curso->idCurso)}}" class="btn btn-success" >Inscrever-se</a>
                            @else
                            
                            @endguest
                        </div>                    
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Modal Subscribe -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <input type="hidden" name="posting">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inscrição</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <form action="">
                            <h4>Dados Pessoais</h4>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" placeholder="Nome">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Seu Email">
                            </div>

                            <div class="form-group">
                                <input type="text" name="telefone" class="form-control" placeholder="Seu Telefone">
                            </div>
                            <div class="form-group">
                                <input type="text" name="formacao" class="form-control" placeholder="Formação Acadêmica">
                            </div>
                            <div class="form-group">
                                <input type="text" name="funcao" class="form-control" placeholder="Cargo/Função">
                            </div>
                            <div class="form-group">
                                <label for="data">Data de Nascimento</label>
                                <input type="date" id="data" class="form-control col-5">
                            </div>
                            <div class="form-group">
                                <label for="def-visual">Deficiente Visual:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="naoRadio" value="nao">
                                    <label class="form-check-label" for="naoRadio">
                                        Nenhuma
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="cegoRadio" value="cego">
                                    <label class="form-check-label" for="cegoRadio">
                                        Cego
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="poucaRadio" value="pouca">
                                    <label class="form-check-label" for="poucaRadio">
                                        Pouca Visão
                                    </label>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="def-visual">OBS:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="cegoRadio" value="cego" disabled>
                                    <label class="form-check-label" for="cegoRadio">
                                        Cego
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="poucaRadio" value="pouca" disabled>
                                    <label class="form-check-label" for="poucaRadio">
                                        Pouca Visão
                                    </label>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label for="def-visual">Para cursista com deficiência visual, Informar abaixo como deseja receber seu material instrucional:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="braille" value="braille" disabled>
                                    <label class="form-check-label" for="braille">
                                        Braille
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="dig" value="dig" disabled>
                                    <label class="form-check-label" for="dig">
                                        Digitalizado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="amp" value="ampliado" disabled>
                                    <label class="form-check-label" for="amp">
                                        Ampliado. (Utilizamos a fonte Tamanha, corpo 24, negrito)
                                    </label>
                                </div>
                            </div>

                            <!-- <div class="mb-2">
                                Cursos:
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="opcao1">
                                    <label class="form-check-label" for="opcao1">
                                        Curso 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="opcao2">
                                    <label class="form-check-label" for="opcao2">
                                        Curso 2
                                    </label>
                                </div>
                            </div> -->

                            <h4>Endereço Residencial</h4>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Sua Rua">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Seu Bairro">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Sua Cidade">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Seu Estado">
                            </div>

                            <div class="form-group">
                                    <input id="contrato" name="contrato" type="checkbox" value="nao">
                                    <label for="contrato">Declaro que as informações prestadas são verdadeira</label>
                                </div>

                        </form>

                        <!-- <h4>Endereço Residencial</h4>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Sua Rua">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Seu Bairro">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Sua Cidade">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Seu Estado">
                            </div>
                        </form> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Concluir</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container" class="footer navbar-fixed-bottom">
                <img width="60px" class="img-ecompjr" src="img/ecompjr-icon.png" alt="">
                <p>
                    </small>Copyright &copy;
                    <a href="https://github.com/EcompJr" target="_blank">EcompJr</a> 2018</p>
            </div>
        </div>
    </footer>

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

    <script src="{{asset('js/script_inscricao_curso.js')}}"></script>


</body>

</html>