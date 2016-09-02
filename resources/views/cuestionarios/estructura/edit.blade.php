@extends('layouts.app')

@section('htmlheader_title')
	Editar version
@endsection

@section('contentheader_title')
	Version {{$version->i_codver}}
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar version {{$version->i_codver}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('versiones.update', $version->i_codver), 'method' => 'put')) !!}
            
            {{ Form::hidden('i_codcuest', '1', array_merge(['class' => 'form-control',])) }}                          
            <div class="form-group">              
              {{ Form::label('v_desver', 'Descripción Versión:', ['class' => 'control-label'])}}
              {{ Form::textarea('v_desver', $version->v_desver, array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
            </div>
            <div class="form-group">              
              {{ Form::label('d_fecvig', 'Inicio de vigencia:', ['class' => 'control-label'])}}
              {{ Form::text('d_fecvig',  date( 'd/m/Y', strtotime($version->d_fecvig)), array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
            </div>

            <div class="form-group">
              <label class="control-label">Estado:</label>
              <select name="i_estreg" class="form-control">
                {{$sel1='', $sel2=''}} 
                @if ($version->i_estreg == 1)                          
                  {{$sel='selected'}}                                                       
                @else                          
                  {{$sel2='selected'}}                    
                @endif             
                <option value="1" {{$sel}}>Activo</option>
                <option value="0" {{$sel2}}>Inactivo</option>                  
              </select>
            </div>

            <div class="form-group">
              {!! Form::submit('Editar', ['class' => 'btn btn-success']) !!}
              {!! Form::button('Borrar', ['class' => 'btn btn-warning', 'type' => 'reset']) !!}
            </div>
          {!! Form::close() !!}
	  		</div>
	  	</div>
	  </div>
	</div>
</div>
@endsection
