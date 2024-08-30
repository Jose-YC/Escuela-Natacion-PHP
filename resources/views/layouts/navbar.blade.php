@include('layouts.link')
@section('navbar')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
            <img src="{{ url('/img/person.svg') }}" class="brand-image img-circle">
            <span class="brand-text font-weight-light"><b>Piscina </b>El Ahogado</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="
          @if (Auth::user()->persona->sexo == 'F') {{ url('/img/F.png') }}
@elseif (Auth::user()->persona->sexo == 'M')
{{ url('/img/M.png') }}
@else
{{ url('/img/person.svg') }} @endif

          "
                        class="img-circle elevation-2">
                </div>
                <div class="info">
                    <a href="/" class="d-block text-uppercase">
                        {{ Auth::user()->persona->nombre }}</br> {{ Auth::user()->persona->apellido }}
                    </a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    @if (Auth::user()->persona()->first()->DNI != null)
                    @yield('link')
                    @yield('link1')

                    @else

                    <li class="text-white">Por favor actualice sus datos </li>
                    @endif
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endsection
