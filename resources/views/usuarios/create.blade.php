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
            <div class="col-md-6 col-sm-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Datos Personales</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    {{ Form::label('v_dni', 'Número de DNI', ['class' => 'control-label']) }}
                    {{ Form::text('v_dni', '', ['class' => 'form-control']) }}
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
                    {{ Form::label('v_nombres', 'Nombres', ['class' => 'control-label']) }}
                    {{ Form::text('v_nombres', '', ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_telefono', 'Teléfono', ['class' => 'control-label']) }}
                    {{ Form::text('v_telefono', '', ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('v_email', 'Correo Electrónico', ['class' => 'control-label']) }}
                    {{ Form::email('v_email', '', ['class' => 'form-control']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('i_coddep', 'Departamento de residencia', ['class' => 'control-label']) }}
                    <select class="form-control" name="i_coddep">
                      @foreach ($departamentos as $departamento)
                        <option value="{{$departamento->i_coddep}}">{{$departamento->v_desdep}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    {{ Form::label('i_codpro', 'Provincia de residencia', ['class' => 'control-label']) }}
                    <select class="form-control" name="i_codpro">
                    </select>
                  </div>
                  <div class="form-group">
                    {{ Form::label('i_coddis', 'Distrito de residencia', ['class' => 'control-label']) }}
                    <select class="form-control" name="i_codpro">
                    </select>
                  </div>
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
                  <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success"><i class="fa fa-save"></i> Crear Usuario</button>
                    {{ Form::button('Limpiar', ['class' => 'btn btn-lg btn-warning', 'type' => 'reset']) }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        {{ Form::close() }}
      </div>
    </div>
  </section>
@endsection
