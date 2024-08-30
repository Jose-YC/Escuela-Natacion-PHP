@section('link')
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Mantenimiento
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-swimming-pool"></i>
                    <p>
                        Piscinas
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('piscinas.index') }}" class="nav-link">
                            <i class="fas fa-list"></i>
                            <p>Listar Pisinas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('piscinas.create') }}" class="nav-link">
                            <i class="fas fa-plus"></i>
                            <p>Crear Nueva Pisina</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-clock"></i>
                    <p>
                        Horas y Horarios
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-hourglass-half"></i>
                            <p>
                                Horas
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('horas.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listar Horas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('horas.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Crear Horas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-calendar-alt"></i>
                            <p>
                                Horarios
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('horarios.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listar Horarios</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('horarios.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Crear Horario</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-list-alt"></i>
                            <p>
                                <p>Horarios Definidos </p>
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('horariosdefinidos.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listar Horas Definidos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('horariosdefinidos.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Crear Horario Completo</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
        </ul>
    </li>
@endsection

@section('link1')
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class=" nav-icon fas fa-users"></i>
            <p>
                Personal
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('empleados.index') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Lista Personal</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('empleados.create') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Crear Personal</p>
                </a>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i>
                    <p>
                        Administrativo
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('administrativos.index') }}" class="nav-link">
                            <i class="fas fa-th-list"></i>
                            <p>Listar Administrativos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p>
                        Profesor
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('profesores.index') }}" class="nav-link">
                            <i class="fas fa-list"></i>
                            <p>Listar Profesores</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class=" nav-icon fas fa-users"></i>
            <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('personas.index') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Lista Usuarios</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class=" nav-icon fas fa-users"></i>
            <p>
                Alumno
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('alumnos.index') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Lista alumnos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('alumnos.create') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Crear Alumno</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class=" nav-icon fas fa-users"></i>
            <p>
                Descuentos
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('descuentos.index') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Lista Descuentos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('descuentos.create') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Crear Descuentos</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class=" nav-icon fas fa-users"></i>
            <p>
                Inscripciones
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('inscripciones.index') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Lista Inscripciones</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('inscripciones.create') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Crear Inscripciones</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class=" nav-icon fas fa-users"></i>
            <p>
                Banco
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('bancos.index') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Lista Bancos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('bancos.create') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Crear Banco</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class=" nav-icon fas fa-users"></i>
            <p>
            Recibos
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('recibos.index') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Lista Recibos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('recibos.create') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Crear Recibo</p>
                </a>
            </li>
        </ul>
    </li>
@endsection



{{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li> --}}
