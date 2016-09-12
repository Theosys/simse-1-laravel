@extends('layouts.app')

@section('htmlheader_title')
	Agregar alternativa
@endsection

@section('contentheader_title')
	Pregunta:
@endsection

@section('contentheader_description')	
	<h2>{{ preg_replace('/(<.*?>)|(&.*?;)/', '', $pregunta->v_despreg) }}</h2>
	<p>Tipo: {{$pregunta->tipo->v_destipo}}</p>
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Agregar una alternativa</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  		{{ Form::open(array('route' => array('alternativas.store'), 'method' => 'post', 'class' => 'form-horizontal')) }}  			
            {{csrf_field()}}
            		{{ Form::hidden('i_codpreg', $pregunta->i_codpreg) }}            		
				    <div class="form-group">              
				      {{ Form::label('v_desalt', 'Descripción Alternativa:', ['class' => 'control-label'])}}
				      {{ Form::textarea('v_desalt', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
				    </div>
				    @if ($pregunta->i_codtipo==4)
				    <div class="form-group">              				      
				      {{ Form::label('v_orienta', 'Tipo Orientación Matricial', ['class' => 'control-label'])}}
				      {{ Form::select('v_orienta', $mat_orienta, null, ['class' => 'form-control', 'required']) }}
				    </div>
				    @endif
				    <div class="form-group">              
				      {{ Form::label('v_resumen', 'Descripción Resumen Reporte:', ['class' => 'control-label'])}}
				      {{ Form::textarea('v_resumen', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese el resumen aqui'])) }}
				    </div>			
				    <input type="hidden" value="{{$pregunta->i_codpreg}}" name="i_codpreg">
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
@include('alternativas.lista')
@endsection
