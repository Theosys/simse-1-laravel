
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <title> Simse - 	Bienvenidos
 </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="http://localhost/simse-1-laravel/public/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="http://localhost/simse-1-laravel/public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="http://localhost/simse-1-laravel/public/css/skins/skin-blue.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/simse-1-laravel/public/cenepred/css/cenepred_main.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="http://localhost/simse-1-laravel/public/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="http://localhost/simse-1-laravel/public/home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><img id="logo-main" src="http://localhost/simse-1-laravel/public/cenepred/images/logo-cenepred-blanco.png"></b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Activa la navegaci&oacute;n</span>
        </a>
        <!-- titulo-principal -->
        <span id="title-main"><h1> <span class="title-abrev">SIMSE</span> Sistema de Información de Monitoreo,<br> Seguimiento y Evaluación </h1></span>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                
                                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="http://localhost/simse-1-laravel/public/img/pepe-perfil.png" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">RLOYOLA</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="http://localhost/simse-1-laravel/public/img/pepe-perfil.png" class="img-circle" alt="User Image" />
                                <p>
                                    RLOYOLA                                    
                                </p>
                            </li>
                            <!-- Menu Body -->
                            
                            <!-- Menu Footer-->
                            <li class="user-footer">                                
                                <div class="pull-left">
                                    <a href="http://localhost/simse-1-laravel/public/miperfil" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="http://localhost/simse-1-laravel/public/logout" class="btn btn-default btn-flat">Salir</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                                
            </ul>
        </div>
    </nav>
</header>

    <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                <div class="pull-left image">
                    <img src="http://localhost/simse-1-laravel/public/img/pepe-perfil.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Ronalde Loyola Pulido</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> En L&iacute;nea</a>
                </div>
            </div>
        
        <!-- search form (Optional) -->
        <!--form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form-->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">ENCABEZAMIENTO</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="http://localhost/simse-1-laravel/public/home"><i class='fa fa-link'></i> <span>Inicio</span></a></li>
                        
            <!--li class="treeview">

            <li class="treeview">

                <a href="#"><i class='fa fa-link'></i> <span>Planes de seguimiento</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/simse-1-laravel/public/planesdeseguimiento">Listado</a></li>
                    <li><a href="http://localhost/simse-1-laravel/public/planesdeseguimiento/create">Agregar</a></li>
                </ul>
            </li> 
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Encuestas</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/simse-1-laravel/public/encuestas">Registrar/Actualizar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="http://localhost/simse-1-laravel/public/configsystem"><i class='fa fa-link'></i><span>Configuración del sistema</span></a></li>


              <a href="#"><i class='fa fa-link'></i><span>Reportes</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="http://localhost/simse-1-laravel/public/reportes">Resumen</a></li>
                <li><a href="http://localhost/simse-1-laravel/public/reportes/indicadores">Indicadores</a></li>
                <li><a href="http://localhost/simse-1-laravel/public/reportes/indicadores/total">Avance total indicadores</a></li>                
              </ul>

            </li-->   

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Inicio        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Nivel</a></li>
        <li class="active">Aqu&iacute;</li>
    </ol>
</section>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
                        	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-11">
				<div class="panel panel-default">
					<div class="panel-heading">Bienvenidos</div>

					<div class="panel-body">						
						Bienvend@ al Sistema de Información de Monitoreo, Seguimiento y Evaluación - SIMSE. 
					</div>
				</div>
			</div>
		</div>
	</div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href='javascript::;'>
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cumplea&ntilde;os de Langdon</h4>
                            <p>Ser&aacute; 23 el 24 de abril</p>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Progreso de Tareas</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href='javascript::;'>
                        <h4 class="control-sidebar-subheading">
                            Dise&ntilde;o plantilla personalizada
                            <span class="label label-danger pull-right">70%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->

        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Pesta&ntilde;a de Contenido de Estadisticas</div><!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">Configuraci&oacute;n general</h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Informe de uso del panel
                        <input type="checkbox" class="pull-right" comprobado />
                    </label>
                    <p>
                        Parte de la informaci&oacute;n acerca de esta opci&oacute;n de configuraci&oacute;n generales
                    </p>
                </div><!-- /.form-group -->
            </form>
        </div><!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar

<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>
    <!-- Main Footer -->
<footer class="main-footer">    
    <div class="pull-right hidden-xs">
        Sistema de Información de Monitoreo, Seguimiento y Evaluación - SIMSE
    </div>    
    <strong>2016 <a target="_blank" href="http://www.cenepred.gob.pe">CENEPRED</a>.</strong>  <a href="#">Dirección de Monitorero, Seguimiento y Evaluación - DIMSE </a>. 
</footer>
</div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="http://localhost/simse-1-laravel/public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="http://localhost/simse-1-laravel/public/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="http://localhost/simse-1-laravel/public/js/app.min.js" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
</body>
</html>
