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
        {{ Form::open(array('route' => array('usuarios.store'), 'method' => 'post', 'files' => true)) }}
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
                      <option value="0">--Seleccione el area--</option>
                      @foreach ($areas as $area)
                        <option value="{{$area->i_codarea}}">{{$area->v_desarea}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    {{ Form::label('i_codcargo', 'Cargo', ['class' => 'control-label']) }}
                    <select class="form-control" name="i_codcargo">
                      <option value="0">--Seleccione el cargo--</option>
                      @foreach ($cargos as $cargo)
                        <option value="{{$cargo->i_codcargo}}">{{$cargo->v_descargo}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form_group">
                    {{ Form::label('i_codrol', 'Rol', ['class' => 'control-label']) }}
                    <select class="form-control" name="i_codrol">
                      <option value="0">--Seleccione el rol de acceso al sistema--</option>
                      @foreach ($roles as $rol)
                        <option value="{{$rol->i_codrol}}">{{$rol->v_desrol}}</option>
                      @endforeach
                    </select>
                    @foreach ($roles as $rol)
                      <span class="help-block rol_help_block"
                      data_id="{{$rol->i_codrol}}">{{$rol->v_ayudarol}}</span>
                    @endforeach
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
                  <div class="form-group" id="username_group">
                    {{ Form::label('v_name', 'Usuario', ['class' => 'control-label']) }}
                    {{ Form::text('v_name', '', ['class' => 'form-control', 'required' => 'true']) }}
                    <span class="help-block" id="username_help_block"></span>
                  </div>
                  <div class="form-group" id="password_group1">
                    {{ Form::label('v_password', 'Password', ['class' => 'control-label']) }}
                    {{ Form::password('v_password', ['class' => 'form-control', 'required' => 'true']) }}
                  </div>
                  <div class="form-group" id="password_group2">
                    {{ Form::label('v_password_repeat', 'Vuelva a ingresar el password', ['class' => 'control-label']) }}
                    {{ Form::password('v_password_repeat', ['class' => 'form-control', 'required' => 'true'])}}
                    <span class="help-block" id="password_help_block"></span>
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
        $.getJSON('{{ url('/api/contactos') }}' + '/' + $(this).attr("data_id"), function(data) {
          $('input[name="i_codpersona"]').val(data.i_codpersona);
          $('input[name="v_apepat"]').val(data.v_apepat);
          $('input[name="v_apemat"]').val(data.v_apemat);
          $('input[name="v_nombre"]').val(data.v_nombre);
          $('input[name="v_numdni"]').val(data.v_numdni);
          $('input[name="v_numtel"]').val(data.v_numtel);
          $('input[name="v_email"]').val(data.v_email);
          $('[name="i_codarea"]').val(data.i_codarea);
          $('[name="i_codcargo"]').val(data.i_codcargo);
          $('input[name="create_person"]').val(false);
          $('#importModal').modal('toggle');
          loadLocation(data.v_coddep, data.v_codpro, data.v_coddis);
        });
      });

      $('input[name="v_name"]').change(function() {
        if ($(this).val() !== '') {
          $.getJSON('{{ url('/api/usuarios') }}' + '?username=' + $(this).val(), function(data) {
            if (data.length !== 0) {
              $('#username_group').removeClass('has-success');
              $('#username_group').addClass('has-error');
              $('#username_help_block').text('El nombre de usuario ya existe');
            } else {
              $('#username_group').removeClass('has-error');
              $('#username_group').addClass('has-success');
              $('#username_help_block').text('Nombre de usuario disponible');
            }
          });
        } else {
          $('#username_group').removeClass('has-success');
          $('#username_group').removeClass('has-error');
          $('#username_help_block').text('');
        }
      });

      $('.rol_help_block').hide();

      $('[name="i_codrol"]').change(function() {
        $('.rol_help_block').hide();
        $('.rol_help_block').each(function(index) {
          if ($(this).attr('data_id') === $('[name="i_codrol"]').val()) {
            $(this).show();
          }
        });
      });

      $('input[name="v_password"]').keyup(function() {
        verifyPassword();
      });

      $('input[name="v_password_repeat"]').keyup(function() {
        verifyPassword();
      });

      function verifyPassword() {
        var pass1 = $('input[name="v_password"]');
        var pass2 = $('input[name="v_password_repeat"]');
        if (pass1.val() === '' || pass2.val() === '') {
          $('#password_group1').removeClass('has-error has-success');
          $('#password_group2').removeClass('has-error has-success');
          $('#password_help_block').text('');
        } else if (pass1.val() !== pass2.val()) {
          $('#password_group1').removeClass('has-success');
          $('#password_group1').addClass('has-error');
          $('#password_group2').removeClass('has-success');
          $('#password_group2').addClass('has-error');
          $('#password_help_block').text('Las contraseñas no coinciden');
        } else {
          $('#password_group1').removeClass('has-error');
          $('#password_group1').addClass('has-success');
          $('#password_group2').removeClass('has-error');
          $('#password_group2').addClass('has-success');
          $('#password_help_block').text('');
        }
      }
  </script>
@endsection
