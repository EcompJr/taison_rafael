<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template-->
  <link href="css/style2.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <!-- @if(isset($errors) && count($errors) > 0)
      <div class="alert alert-danger">
        @foreach($errors as $erro)
          <p>{{$erro}}</p>
        @endforeach
      </div>
    @endif -->
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST" action="{{ route('admin') }}" name="login" class="login-form">
          @csrf
            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" name="email" type="email" id="email" aria-describedby="emailHelp" placeholder="Seu Email" value="{{old('email')}}" required>
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input class="form-control" name="password" type="password" id="senha" placeholder="Senha" required>
            </div>
            <div class="form-group">
                <label class="form-check-label">
                  <a href="#">Esqueci a senha</a>
            </div>
            <div>  
              <button type="submit" class="btn btn-primary btn-block" >Login</button>
            </div>
        </form>
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
