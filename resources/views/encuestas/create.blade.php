@extends('layouts.app')

@section('htmlheader_title')
	Encuesta: Crear Encuesta
@endsection

@section('contentheader_title')
	Encuesta: 
@endsection

@section('contentheader_description')	
	Crear
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Agregar una nueva encuesta</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			{{ Form::open(array('route' => array('encuestas1.guardar'), 'method' => 'post', 'class' => 'form-horizontal')) }}	  			
            	{{csrf_field()}}	    				      
				    <div class="form-group">              
				      {{ Form::label('v_desenc', 'Descripción Encuesta :', ['class' => 'control-label'])}}
				      {{ Form::textarea('v_desenc', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('i_codcuest', 'Cuestionario :', ['class' => 'control-label'])}}
				      {{ Form::select('i_codcuest', $cuestionarios, null, ['class' => 'form-control', 'required']) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('i_codver', 'Versión de Cuestionario :', ['class' => 'control-label'])}}
				      {{ Form::select('i_codver', $versiones, null, ['class' => 'form-control', 'required']) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('i_codtiporg', 'Cobertura :', ['class' => 'control-label'])}}				      
				      {{ Form::checkbox('i_codtiporg', 1, null, ['class' => 'field']) }}
				      {{ Form::label('i_codtiporg', 'MINISTERIO :', ['class' => 'control-label'])}}
				      {{ Form::checkbox('i_codtiporg', 2, null, ['class' => 'field']) }}
				      {{ Form::label('i_codtiporg', 'GOBIERNO REGIONAL :', ['class' => 'control-label'])}}
				      {{ Form::checkbox('i_codtiporg', 3, null, ['class' => 'field']) }}
				      {{ Form::label('i_codtiporg', 'MUNICIPALIDAD PROVINCIAL  :', ['class' => 'control-label'])}}
				      {{ Form::checkbox('i_codtiporg', 4, null, ['class' => 'field']) }}
				      {{ Form::label('i_codtiporg', 'MUNICIPALIDAD DISTRITAL :', ['class' => 'control-label'])}}
				      {{ Form::checkbox('i_codtiporg', 5, null, ['class' => 'field']) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('i_codfre', 'Frecuencia :', ['class' => 'control-label'])}}
				      {{ Form::select('i_codfre', $frecuencias, null, ['class' => 'form-control', 'required']) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('v_periodo', 'Periodo', ['class' => 'control-label'])}}
				      {{ Form::select('v_periodo', $periodos, null, ['class' => 'form-control', 'required']) }}
				      {{ Form::label('v_year', 'Año', ['class' => 'control-label'])}}
				      {{ Form::select('v_year', $anios, null, ['class' => 'form-control', 'required']) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('d_fecini', 'Fecha inicio:', ['class' => 'control-label'])}}
				      {{ Form::text('d_fecini', '', array_merge(['class' => 'form-control'])) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('d_fecfin', 'Fecha fin:', ['class' => 'control-label'])}}
				      {{ Form::text('d_fecfin', '', array_merge(['class' => 'form-control'])) }}
				    </div>				    				    				    				    
				    <div class="form-group">
				    	<button type="submit" class="btn btn-success">Registrar</button>
				      <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>				
				{{ Form::close() }}
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>

@endsection
