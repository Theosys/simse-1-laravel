@extends('layouts.app')

@section('htmlheader_title')
  Crear operadores
@endsection

@section('contentheader_title')
  Operadores
@endsection

@section('contentheader_description')
  Agregar
@endsection

@section('main-content')
  <section class="content">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
      <div class="col-md-12">
        {{ Form::open(array('route' => $route, 'method' => $method)) }}
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
                  <button type="submit" class="btn btn-app"><i class="fa fa-save"></i>@section('label_btn') Crear @show</button>
                  <button type="reset" class="btn btn-app" ><i class="fa fa-file-o"></i>Limpiar</button>
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
                      <input type="text" name="i_codopera" value="<?php echo (isset($row_persona->i_codopera)?$row_persona->i_codopera:0);?>" hidden>
                  </div>

                  <div class="form-group">
                    {{ Form::label('v_numruc', 'Número de RUC', ['class' => 'control-label']) }}
                    {{ Form::text('v_numruc', (isset($row_persona->v_numruc)?$row_persona->v_numruc:''), ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_desrazon', 'Raz&oacute;n Social', ['class' => 'control-label']) }}
                    {{ Form::text('v_desrazon', (isset($row_persona->v_desrazon)?$row_persona->v_desrazon:''), ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_numtel', 'Tel&eacute;fono', ['class' => 'control-label']) }}
                    {{ Form::text('v_numtel', (isset($row_persona->v_numtel)?$row_persona->v_numtel:''), ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_numfax', 'v_numfax', ['class' => 'control-label']) }}
                    {{ Form::text('v_numfax', (isset($row_persona->v_numfax)?$row_persona->v_numfax:''), ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_desoperador', 'Descripci&oacute;n del Operador', ['class' => 'control-label']) }}
                    {{ Form::text('v_desoperador', (isset($row_persona->v_desoperador)?$row_persona->v_desoperador:''), ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_nombre', 'Sigla', ['class' => 'control-label']) }}
                    {{ Form::text('v_nombre', (isset($row_persona->v_nombre)?$row_persona->v_nombre:''), ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_email', 'Correo Electrónico', ['class' => 'control-label']) }}
                    {{ Form::email('v_email', (isset($row_persona->v_email)?$row_persona->v_email:''), ['class' => 'form-control']) }}
                  </div>
                	<!--
                  	Departamento de residencia | Provincia de residencia | Distrito de residencia
                  	-->
                  @include('partials.location')
                </div>
              </div>
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Puesto</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    {{ Form::label('i_codtiporg', 'i_codtiporg', ['class' => 'control-label']) }}
                    {{ Form::text('i_codtiporg', (isset($row_persona->i_codtiporg)?$row_persona->i_codtiporg:''), ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_sigla', 'v_sigla', ['class' => 'control-label']) }}
                    {{ Form::text('v_sigla', (isset($row_persona->v_sigla)?$row_persona->v_sigla:''), ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('i_codnivel', 'i_codnivel', ['class' => 'control-label']) }}
                    {{ Form::text('i_codnivel', (isset($row_persona->i_codnivel)?$row_persona->i_codnivel:''), ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_web', 'v_web', ['class' => 'control-label']) }}
                    {{ Form::text('v_web', (isset($row_persona->v_web)?$row_persona->v_web:''), ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_direccion', 'v_direccion', ['class' => 'control-label']) }}
                    {{ Form::text('v_direccion', (isset($row_persona->v_direccion)?$row_persona->v_direccion:''), ['class' => 'form-control'])}}
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
                  
                </div>
              </div>
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Extra</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                  
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
                <?php if(!empty($contactos) && isset($contactos)):?>
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
                <?php endif;?>
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
