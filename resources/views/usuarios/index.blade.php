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
                  <td>
                    <a href="{{ url('/usuarios/show/'.$usuario->id) }}">{{$usuario->id}}</a>
                  </td>
                  <td>{{$usuario->name}}</td>
                  <td>{{$usuario->persona->v_apepat}}</td>
                  <td>{{$usuario->persona->v_apemat}}</td>
                  <td>{{$usuario->persona->v_nombre}}</td>
                  <td>
                    @if ($usuario->persona->operadores != null)
                      @foreach ($usuario->persona->operadores as $operador)
                        {{ $operador->v_desoperador }}
                      @endforeach
                    @endif
                  </td>
                  <td>{{$usuario->persona->departamento->v_desdep}}</td>
                  <td>{{$usuario->persona->provincia()->v_despro}}</td>
                  <td>{{$usuario->persona->distrito()->v_desdis}}</td>
                  <td>{{$usuario->created_at}}</td>
                  <td>{{$usuario->i_estreg}}</td>
                  <td>                    
                    <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="#"><span class="text-danger glyphicon glyphicon-trash"></span></a>
                  </td>
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

<!-- DataTables -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>

<!-- page script -->
<script>
    $('#usuarios').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
      }
    });
</script>

@endsection
