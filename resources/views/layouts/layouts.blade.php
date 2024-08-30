@include('layouts.navbar')
@include('layouts.scripts')
@include('layouts.css')
@include('layouts.footer')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ url('/favicons/favicon.ico') }}" type="image/x-icon">
  <title>El Ahogado | @yield('title')</title>


  <!-- Google Font: Source Sans Pro -->
  @yield('css')
  @yield('css1')
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>


      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>

          </div>
        </li>
        {{-- condiciona con el usuario --}}
        @php

        $user=Auth::user()->persona->DNI;
        $persona =Auth::user()->persona;
        @endphp
        @if($user == null)
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">1</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">1 Notificación</span>
            <div class="dropdown-divider"></div>
            <a href="{{ route('personas.edit',$persona ) }}" class="dropdown-item">
              <i class="fas fa-cog mr-2"></i></i>actualice su perfil

            </a>
        </li>
        @else
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">0</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">0 Notificación</span>

        </li>
        @endif




        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="
          @if (Auth::user()->persona->sexo == 'F')
            {{ url('/img/F.png') }}
          @elseif (Auth::user()->persona->sexo == 'M' )
            {{ url('/img/M.png') }}
          @else
          {{ url('/img/person.svg') }}
          @endif


          " class="user-image img-circle elevation-2" alt="User Image">
            <span class="d-none d-md-inline"></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary h-auto">
              <img src="
              @if (Auth::user()->persona->sexo == 'F')
                {{ url('/img/F.png') }}
              @elseif (Auth::user()->persona->sexo == 'M' )
                {{ url('/img/M.png') }}
              @else
              {{ url('/img/person.svg') }}
              @endif
            " class="img-circle elevation-2" alt="User Image">

              <p>
                {{ Auth::user()->persona->nombre}} </br>{{ Auth::user()->persona->apellido}} </br> Web Developer

              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
              </div>
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->

            <li class="user-footer">
              @php $persona = Auth::user()->persona; @endphp
              <a href="{{ route('personas.edit',$persona ) }}" class="btn btn-primary btn-flat">
                Editar
              </a>
              <a href="{{ route('personas.show',$persona ) }}" class="btn btn-success float-right">
                Profile
              </a>
            </li>
            <li class="text-center w-100 p-2" >

              {!! Form::open(['route'=> ['logout']]) !!}

              {!! Form::submit('Sign out', ['class'=>'btn btn-outline-danger text-center btn-block btn-secondary text-light border border-secondary']) !!}

              {!! Form::close() !!}
            </li>

          </ul>

        </li>



      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @yield('navbar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        @yield('content')
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @yield('footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrer -->
  @yield('js')
  <!-- jQuery -->
  @yield('script')

</body>

</html>
