<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrar Usuario |Piscina</title>
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

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="{{ route('welcome') }}" class="h1">
          <b>Piscina</b>El Ahogado</a>
      </div>
      <div class="card-body">
        <div class="">
          <p class="login-box-msg">Registrar nuevo Usuario</p>
          <div class="p-1">
            @error('nombre')
            <span>
              <strong class="text-danger">{{ $message }}</strong>
            </span> <br>
            @enderror
            @error('email')
            <span>
              <strong class="text-danger">{{ $message }}</strong>
            </span> <br>
            @enderror
            @error('password_confirmation')
            <span>
              <strong class="text-danger">{{ $message }}</strong>
            </span> <br>
            @enderror
            @error('password')
            <span>
              <strong class="text-danger">{{ $message }}</strong>
            </span> <br>
            @enderror
          </div>
        </div>

        {!! Form::open(['route'=>'register']) !!}
        <div class="input-group mb-3">
          {!! Form::text("nombre", null, ['class'=>'form-control','placeholder' => 'Ingrese el nombre']) !!}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          {!! Form::email("email", null, ['class'=>'form-control','placeholder' => 'Ingrese el Correo']) !!}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
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
        <div class="input-group mb-3">
          {!! Form::password("password_confirmation", ['class'=>'form-control','placeholder' => 'Ingrese de nuevo la Contraseña']) !!}

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        <div class=" text-center mb-3">
          {!! Form::submit("Crear Usuario", ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

        <a href="{{ route('login') }}" class="text-center">Ya tengo mi cuenta creada</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="/Admin_layouts/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/Admin_layouts/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/Admin_layouts/dist/js/adminlte.min.js"></script>
</body>

</html>
