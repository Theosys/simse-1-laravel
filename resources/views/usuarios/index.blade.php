@extends('layouts.app')

@section('htmlheader_title')
  Usuarios
@endsection

@section('contentheader_title')
  Usuarios
@endsection

@section('contentheader_description')
  Listado
@endsection

@section('main-content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Usuarios</h3>
        </div>
        <div class="box-body">
          <table id="usuarios" class="table table-bordered table-hover">
            <thead>
              <th>N°</th>
              <th>Usuario</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Nombres</th>
              <th>Operador</th>
              <th>Departamento</th>
              <th>Provincia</th>
              <th>Distrito</th>
              <th>Fecha Registro</th>
              <th>Estado</th>
              <th>Acciones</th>
            </thead>
            <tbody>
              @foreach ($usuarios as $usuario)
                <tr>
                  <th>
                    <a href="{{ url('/usuarios/show/'.$usuario->id) }}">{{$usuario->id}}</a>
                  </th>
                  <th>{{$usuario->name}}</th>
                  <th>{{$usuario->persona->v_apepat}}</th>
                  <th>{{$usuario->persona->v_apemat}}</th>
                  <th>{{$usuario->persona->v_nombre}}</th>
                  <th></th>
                  <th>{{$usuario->persona->departamento->v_desdep}}</th>
                  <th>{{$usuario->persona->provincia()->v_despro}}</th>
                  <th>{{$usuario->persona->distrito()->v_desdis}}</th>
                  <th>{{$usuario->created_at}}</th>
                  <th>{{$usuario->i_estreg}}</th>
                  <th>
                    <a href="#">Permisos</a>
                    <a href="#">Editar</a>
                    <a href="#">Eliminar</a>
                  </th>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- jQuery 2.2.3 -->
<script src="{{ asset('/plugins/jQuery/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- DataTables -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>

<!-- page script -->
<script>
    $('#usuarios').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
</script>

@endsection
