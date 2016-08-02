<div class="navbar-header">

    <!-- Collapsed Hamburger -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/') }}">SIMSE</a>
</div>

<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <!-- Left Side Of Navbar -->
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/') }}">Inicio</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Operadores <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="{{ url('/operadores') }}">Listado</a></li>
          <li><a href="{{ url('/operadores/create') }}">Agregar</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Preguntas <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="{{ url('/preguntas') }}">Listado</a></li>
          <li><a href="{{ url('/preguntas/create') }}">Agregar</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cuestionarios <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="{{ url('/cuestionarios') }}">Listado</a></li>
          <li><a href="{{ url('/cuestionarios/create') }}">Agregar</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Plan de Seguimiento <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="{{ url('/planseguimientos') }}">Listado</a></li>
          <li><a href="{{ url('/planseguimientos/create') }}">Agregar</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Configuracion de Sistema <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="{{ url('/configsystem') }}">Listado</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuario <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="{{ url('/usuarios') }}">Listado</a></li>
          <li><a href="{{ url('/usuarios/create') }}">Agregar</a></li>
        </ul>
      </li>
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Ingresar</a></li>
            <li><a href="{{ url('/register') }}">Registro</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->persona->fullName() }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                </ul>
            </li>
        @endif
    </ul>
</div>
