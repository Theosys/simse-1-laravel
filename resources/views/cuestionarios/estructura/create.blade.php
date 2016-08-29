@extends('layouts.app')

@section('htmlheader_title')
	Cuestionario: nombre cuest aqui
@endsection

@section('contentheader_title')
	Version: 
@endsection

@section('contentheader_description')	
	numero de verson aqui
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Asignar nueva pregunta a la version</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			{{ Form::open(array('route' => array('estruccuest.store'), 'method' => 'post', 'class' => 'form-horizontal')) }}	  			
            	{{csrf_field()}}				    				    
				      {{ Form::hidden('i_codcuest', '1', array_merge(['class' => 'form-control'])) }}				    				      
				    <div class="form-group">              
				      {{ Form::label('v_desver', 'Indicador', ['class' => 'control-label'])}}
				      {{ Form::select('i_codind', $indicadores, null, ['class' => 'form-control', 'required']) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('v_desver', 'Preguntas', ['class' => 'control-label'])}}
				      {{ Form::select('i_codpreg', $nopreguntas, null, ['class' => 'form-control', 'required']) }}
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

@include('cuestionarios.estructura.lista')

@endsection
