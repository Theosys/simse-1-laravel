<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/pepe-perfil.png')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->persona->fullName() }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <!--form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form-->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            @if(Auth::user()->i_codrol == 1)
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i><span>Administración</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/usuarios') }}">Usuarios</a></li>
                <li><a href="{{ url('/operadores') }}">Operadores</a></li>
                <li><a href="{{ url('/planseguimientos') }}">Plan Seguimiento</a></li>
                <li><a href="{{ url('/preguntas') }}">Preguntas</a></li>
                <li><a href="{{ url('/cuestionarios') }}">Cuestionarios</a></li>
                <li><a href="{{ url('/encuestas') }}">Encuestas</a></li>                
              </ul>
            </li>
            @endif
            @if(Auth::user()->i_codrol == 2)            
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i><span>Encuestas</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/encuestas') }}">Registrar/Actualizar</a></li>
                <!--li><a href="{{ url('/contactos') }}">Contactos</a></li>
                <li><a href="{{ url('/sectecnicos') }}">Secretarios Tec.</a></li>
                <li><a href="{{ url('/respuestas') }}">Respuestas resumen</a></li>
                <li><a href="{{ url('/seguimiento') }}">Seguimiento </a></li>
                <li><a href="{{ url('/encuestas1/cobertura') }}">Cobertura </a></li-->
              </ul>
            </li>
            @endif

            <!--li class="treeview">

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
                    <li><a href="{{ url('/encuestas') }}">Registrar/Actualizar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{ url('/configsystem') }}"><i class='fa fa-link'></i><span>Configuración del sistema</span></a></li>


              <a href="#"><i class='fa fa-link'></i><span>Reportes</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/reportes') }}">Resumen</a></li>
                <li><a href="{{ url('/reportes/indicadores') }}">Indicadores</a></li>
                <li><a href="{{ url('/reportes/indicadores/total') }}">Avance total indicadores</a></li>                
              </ul>

            </li-->   

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
