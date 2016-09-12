@extends('layouts.app')

@section('htmlheader_title')
  Solicitar usuario
@endsection

@section('contentheader_title')
  Solicitar
@endsection

@section('contentheader_description')
  Usuario
@endsection

@section('main-content')
  
  <!--href="stylesheet" type="text/css"-->
  
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
        {{ Form::open(array('url' => $url, 'method' => $method, 'files' => true)) }}
          <div class="row">
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Acciones</h3>
                </div>
                <div class="box-body">
                  <button type="submit" class="btn btn-app"><i class="fa fa-save"></i>@section('label_btn') Crear @show</button>
                  
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
                      <input type="text" name="i_codpersona" value="<?php echo (isset($row_persona->i_codpersona)?$row_persona->i_codpersona:0);?>" hidden>
                      <input type="text" name="i_codusu" value="<?php echo (isset($row_user->id)?$row_user->id:0);?>" hidden>
                      <input type="text" name="i_codopera" id="i_codopera" value="0" hidden>
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_desrazon', 'Instituci&oacute;n', ['class' => 'control-label']) }}
                    {{ Form::text('v_desrazon_', '', ['class' => 'form-control','data-provide'=>'typeahead']) }}

                  </div>
                  <div class="form-group">
                    {{ Form::label('v_numdni', 'N&uacute;mero de DNI', ['class' => 'control-label']) }}
                    {{ Form::text('v_numdni', (isset($row_persona->v_numdni)?$row_persona->v_numdni:''), ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_apepat', 'Apellido Paterno', ['class' => 'control-label']) }}
                    {{ Form::text('v_apepat', (isset($row_persona->v_apepat)?$row_persona->v_apepat:''), ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_apemat', 'Apellido Materno', ['class' => 'control-label']) }}
                    {{ Form::text('v_apemat', (isset($row_persona->v_apemat)?$row_persona->v_apemat:''), ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_nombre', 'Nombres', ['class' => 'control-label']) }}
                    {{ Form::text('v_nombre', (isset($row_persona->v_nombre)?$row_persona->v_nombre:''), ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_numtel', 'Teléfono', ['class' => 'control-label']) }}
                    {{ Form::text('v_numtel', (isset($row_persona->v_numtel)?$row_persona->v_numtel:''), ['class' => 'form-control'])}}
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
            </div>
            @section('credencial_usuario')
            <div class="col-md-6 col-sm-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Opciones de acceso</h3>
                </div>
                <div class="box-body">
                  <div class="form-group" id="username_group">
                    {{ Form::label('name', 'Usuario', ['class' => 'control-label']) }}
                    {{ Form::text('name', (isset($row_user->name)?$row_user->name:''), ['class' => 'form-control', 'required' => 'true']) }}
                    <span class="help-block" id="username_help_block"></span>
                  </div>
                  <div class="form-group" id="password_group1">
                    {{ Form::label('v_password', 'Password', ['class' => 'control-label']) }}
                    {{ Form::password('v_password',['class' => 'form-control']) }}
                    <!--{{ Form::input('password','v_password',(isset($row_user->password)?$row_user->password:''),['class' => 'form-control', 'required' => 'true']) }}-->
                  </div>
                  <div class="form-group" id="password_group2">
                    {{ Form::label('v_password_repeat', 'Vuelva a ingresar el password', ['class' => 'control-label']) }}
                    {{ Form::password('v_password_repeat', ['class' => 'form-control'])}}
                    <!--{{ Form::input('password','v_password_repeat',(isset($row_user->password)?$row_user->password:''), ['class' => 'form-control', 'required' => 'true'])}}-->
                    <span class="help-block" id="password_help_block"></span>
                  </div>
                  
                </div>
              </div>
            </div>
            @show
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
@endsection

@section('scripts')
  <script src="{{ asset('js/bootstrap3-typeahead.min.js')}}"></script>
@include('partials.script-location')
  <script>
    var operadores_typeahead = []
    var map_typeahead = {}
    $(function(){
      $('input[name="v_desrazon_"]').typeahead({
          source:function(query,process){
            $.ajax({
              url:"{{url('api/operadores')}}",
              type:'GET',
              data:'q='+query,
              dataType:'JSON',
              async:true,
              success:function(data){
                $.each(data, function (i, operadores) {
                  map_typeahead[operadores.id]=operadores.desrazon;
                  operadores_typeahead.push(operadores.desrazon); 

                });
                process(operadores_typeahead)
              }
            });
          }
          ,updater:function(item){
            $.each(map_typeahead,function(i,operador){
              if(operador==item){
                $("#i_codopera").val(i);
              }
            })
            return item;
          }
          ,minLength:2
        });
      });      
      $('input[name="name"]').change(function() {
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

      $(document).ready(function(){
        if('{{$disabled_input_username}}'==1){
          $('input[name="name"]').prop('disabled',true);
        }
        <?php if(isset($row_persona->i_codpersona) && $row_persona->i_codpersona>0):?>
          loadLocation('{{$row_persona->v_coddep}}','{{$row_persona->v_codpro}}','{{$row_persona->v_coddis}}');
        <?php else:?>
          getDepartamentos(null);
        <?php endif;?>
      
      });

      

  </script>
@endsection
