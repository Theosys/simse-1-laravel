@extends('layouts.app')

@section('htmlheader_title')
  Crear usuario
@endsection

@section('contentheader_title')
  Usuarios
@endsection

@section('contentheader_description')
  Agregar
@endsection

@section('main-content')
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        {{ Form::open(array('route' => array('usuarios.store'), 'method' => 'post')) }}
          <div class="row">
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Acciones</h3>
                </div>
                <div class="box-body">
                  <button type="button" class="btn btn-app" data-toggle="modal" data-target="#importModal">
                    <i class="fa fa-user-plus"></i>Importar contacto
                  </button>
                  <button type="submit" class="btn btn-app"><i class="fa fa-save"></i>Crear</button>
                  <button type="reset" class="btn btn-app"><i class="fa fa-file-o"></i>Limpiar</button>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Datos Personales</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <input type="checkbox" name="create_person" checked hidden>
                    <input type="text" name="i_codpersona" value="" hidden>
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_numdni', 'Número de DNI', ['class' => 'control-label']) }}
                    {{ Form::text('v_numdni', '', ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_apepat', 'Apellido Paterno', ['class' => 'control-label']) }}
                    {{ Form::text('v_apepat', '', ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_apemat', 'Apellido Materno', ['class' => 'control-label']) }}
                    {{ Form::text('v_apemat', '', ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_nombre', 'Nombres', ['class' => 'control-label']) }}
                    {{ Form::text('v_nombre', '', ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_numtel', 'Teléfono', ['class' => 'control-label']) }}
                    {{ Form::text('v_numtel', '', ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_email', 'Correo Electrónico', ['class' => 'control-label']) }}
                    {{ Form::email('v_email', '', ['class' => 'form-control']) }}
                  </div>
                  @include('partials.location')
                </div>
              </div>
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Puesto</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    {{ Form::label('i_codarea', 'Área', ['class' => 'control-label']) }}
                    <select class="form-control" name="i_codarea">
                      @foreach ($areas as $area)
                        <option value="{{$area->i_codarea}}">{{$area->v_desarea}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    {{ Form::label('i_codcargo', 'Cargo', ['class' => 'control-label']) }}
                    <select class="form-control" name="i_codcargo">
                      @foreach ($cargos as $cargo)
                        <option value="{{$cargo->i_codcargo}}">{{$cargo->v_descargo}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form_group">
                    {{ Form::label('i_codrol', 'Rol', ['class' => 'control-label']) }}
                    <select class="form-control" name="i_codrol">
                      @foreach ($roles as $rol)
                        <option value="{{$rol->i_codrol}}">{{$rol->v_desrol}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Opciones de acceso</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    {{ Form::label('v_name', 'Usuario', ['class' => 'control-label']) }}
                    {{ Form::text('v_name', '', ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_password', 'Password', ['class' => 'control-label']) }}
                    {{ Form::password('v_password', ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_password_repeat', 'Vuelva a ingresar el password', ['class' => 'control-label']) }}
                    {{ Form::password('v_password_repeat', ['class' => 'form-control'])}}
                  </div>
                </div>
              </div>
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Extra</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    {{ Form::label('file_sol', 'Solicitud Digital', ['class' => 'control-label']) }}
                    {{ Form::file('file_sol', ['class' => 'form-control']) }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        {{ Form::close() }}
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Contactos</h4>
          </div>
          <div class="modal-body">
            <table id="contactos" class="table table-bordered table-hover">
              <thead>
                <th>N°</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th></th>
              </thead>
              <tbody>
                @foreach ($contactos as $contacto)
                  <tr>
                    <td>
                      {{$contacto->i_codpersona}}
                    </td>
                    <td>
                      {{$contacto->v_numdni}}
                    </td>
                    <td>
                      {{$contacto->fullName()}}
                    </td>
                    <td>
                      <button type="button" class="contacto" data_id="{{$contacto->i_codpersona}}">Agregar</button>
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
      $('#contactos').DataTable({
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

      $('.contacto').click(function() {
        $.getJSON('{{ url('/contactos') }}' + '/' + $(this).attr("data_id"), function(data) {
          $('input[name="i_codpersona"]').val(data.i_codpersona);
          $('input[name="v_apepat"]').val(data.v_apepat);
          $('input[name="v_apemat"]').val(data.v_apemat);
          $('input[name="v_nombre"]').val(data.v_nombre);
          $('input[name="v_numdni"]').val(data.v_numdni);
          $('input[name="v_numtel"]').val(data.v_numtel);
          $('input[name="v_email"]').val(data.v_email);
          $('input[name="create_person"]').val(false);
          $('#importModal').modal('toggle');
          loadLocation(data.v_coddep, data.v_codpro, data.v_coddis);
        });
      });
  </script>
@endsection
