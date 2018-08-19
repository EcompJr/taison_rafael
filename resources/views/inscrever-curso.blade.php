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
            <a class="navbar-brand js-scroll-trigger" href="#page-top">CAP</a>
        </div>
    </nav>

    <section class="portfolio mt-4" id="portfolio">
    <div>
        <div class="col-sm-6 offset-lg-3 form-box">
            <h4 class="text-center mb-4">{{$curso->titulo}}</h4>
            <form action="{{url('/inscrever'.$curso->idCurso)}}" method="POST" class="registration-form">
                @csrf
                <h5>Dados Pessoais</h5>
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required>
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Seu Email" required>
                </div>

                <div class="form-group">
                    <input type="text" name="telefone" placeholder="Seu Telefone" class="form-control" data-mask="(00) 00000-0000" required>
                </div>
                            
                <div class="form-group">
                    <label for="data">Formação</label>
                    <select class="form-control" name="formacao" id="formacao" required>
                        <option value="">Escolha a sua Formação</option>
                         @foreach($formacoes as $formacao)
                          <option value="{{$formacao}}">{{$formacao}}</option>
                         @endforeach
                    </select>
                </div>
                            
                <div class="form-group">
                    <label for="data">Cargo</label>
                    <select class="form-control" name="cargo" id="cargo" required>
                        <option value="">Escolha o seu cargo</option>
                         @foreach($cargos as $cargo)
                          <option value="{{$cargo}}">{{$cargo}}</option>
                         @endforeach
                    </select>
                </div>
                            
                <div class="form-group">
                    <label for="data">Data de Nascimento</label>
                    <input type="text" name="dataNascimento" id="data" class="form-control col-5" data-mask="00/00/0000" placeholder="dd/mm/aaaa" required>
                </div>
                            
                <div class="form-group">
                    <label for="def-visual">Deficiente Visual:</label>
                    <select class="form-control" name="deficiencia" id="deficiencia" required>
                         <option value="">Apresenta alguma Deficiencia</option>
                         @foreach($deficiencias as $deficiencia)
                          <option value="{{$deficiencia}}">{{$deficiencia}}</option>
                         @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="def-visual">Material de estudo</label>
                    <select class="form-control" name="material" id="material" required>
                        <option value="">Qual material prefere</option>
                         @foreach($materiais as $material)
                          <option value="{{$material}}">{{$material}}</option>
                         @endforeach
                    </select>
                </div>

                <h5>Endereço Residencial</h5>
                <div class="form-group">
                    <input type="text" class="form-control" name="endereco" placeholder="Sua Rua e número" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="bairro" placeholder="Seu Bairro" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="cidade" placeholder="Sua Cidade" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="estado" placeholder="Seu Estado" required>
                </div>

                <div class="form-group">
                    <input id="contrato" name="contrato" type="checkbox" value="nao" required>
                    <label for="contrato">Declaro que as informações prestadas são verdadeira</label>
                </div>

                <div class="form-group">
                    <a href="{{url('/cursos')}}"  class="btn btn-danger">Voltar</a>
                    <button type="submit" class="btn btn-success">Concluir</button>
                </div>
            </form>
        </div>
    </div>
</section>



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
    <script src="js/jquery.mask.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

    <script src="{{asset('js/script_inscricao_curso.js')}}"></script>


</body>

</html>