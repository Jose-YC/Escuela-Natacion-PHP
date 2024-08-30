<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login |Piscina</title>
  <link rel="shortcut icon" href="{{ url('/favicons/favicon.ico') }}" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/Admin_layouts/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/Admin_layouts/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Admin_layouts/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="{{ route('welcome') }}" class="h1">
          <b>Piscina</b>El Ahogado</a>
      </div>
      <div class="card-body">
        <div class="  ">
          <p class="login-box-msg">Inicie sesion para ingresar </p>
          <div class="p-1">
            @error('email')
            <strong class="text-danger">{{ $message }}</strong> <br>
            @enderror
            @error('password')
            <strong class="text-danger">{{ $message }}</strong>
            @enderror
          </div>
        </div>

        {!! Form::open(['route'=>'loginPost']) !!}

        <div class="input-group mb-3">


          {!! Form::email("email", null, ['class'=>'form-control','placeholder' => 'Ingrese el Correo']) !!}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope">
              </span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          {!! Form::password("password", ['class'=>'form-control','placeholder' => 'Ingrese de nuevo la Contraseña']) !!}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="mb-3">
          {!! Form::submit("Ingresar", ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        <p class="mb-1">
          <a href="{{ route('register') }}" class="text-center">Registrar un nuevo Usuario</a>
        </p>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="/Admin_layouts/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/Admin_layouts/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/Admin_layouts/dist/js/adminlte.min.js"></script>
</body>

</html>
