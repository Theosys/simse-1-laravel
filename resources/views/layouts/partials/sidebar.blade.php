<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->persona->fullName() }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i><span>Preguntas</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/preguntas') }}">Listado</a></li>
                <li><a href="{{ url('/preguntas/create') }}">Agregar</a></li>
              </ul>
            </li>            
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Cuestionarios</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/cuestionarios') }}">Listado</a></li>
                    <li><a href="{{ url('/cuestionarios/create') }}">Agregar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Usuarios</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/usuarios') }}">Listado</a></li>
                    <li><a href="{{ url('/usuarios/create') }}">Agregar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Operadores</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/operadores') }}">Listado</a></li>
                    <li><a href="{{ url('/operadores/create') }}">Agregar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Planes de seguimiento</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/planesdeseguimiento') }}">Listado</a></li>
                    <li><a href="{{ url('/planesdeseguimiento/create') }}">Agregar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Encuestas</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/encuestas/seguimiento-resumen') }}">Seguimiento Resumen</a></li>
                    <li><a href="{{ url('/encuestas/seguimiento-detalle') }}">Seguimiento Detallado </a></li>
                    <li><a href="{{ url('/encuestas/cobertura') }}">Cobertura</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/configsystem') }}"><i class='fa fa-link'></i>Configuración del sistema</a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
