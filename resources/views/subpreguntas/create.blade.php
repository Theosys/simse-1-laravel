@extends('layouts.app')

@section('htmlheader_title')
	Agregar subpregunta
@endsection

@section('contentheader_title')
	Pregunta:
@endsection

@section('contentheader_description')	
	<h2>{{$subpreguntas[0]->pregunta->v_despreg}}</h2>
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Agregar un nueva subpregunta</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  		{{ Form::open(array('route' => array('subpreguntas.store'), 'method' => 'post', 'files' => true, 'class' => 'form-horizontal')) }}
	  			<!-- <form class="form-horizontal" action="{{ url('/subpreguntas') }}" method="POST" enctype="multipart/form-data"> -->
            {{csrf_field()}}
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Descripción SubPregunta</label>				      
				      <textarea class="form-control" name="v_dessubpreg" placeholder="Ingrese su pregunta aqui" required></textarea>
				    </div>				    
				    <div class="form-group">
				        <label for="inputEmail" class="control-label">Se solicicitara medio de verificación:  </label>
				      	<label><input type="radio" name="i_verifica" value="0" checked> NO</label>				        				        
				        <label><input type="radio" name="i_verifica" value="1"> SI</label>
  						
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Tipo de subpregunta</label> 
				      <select name="i_codtipo" class="form-control">
				      	@foreach($tiposubpregunta as $item)
				      		<option value="{{$item->i_codtipo}}">{{$item->v_destipo}}</option>
				      	@endforeach
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Clase de subpregunta</label>
			        <select name="i_codtipclas" class="form-control">
				      	@foreach($tiposubpreguntaClase as $item)
				      		<option value="{{$item->i_codtipclas}}">{{$item->v_destipoclas}}</option>
				      	@endforeach
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Descripción Resumen Reporte</label>				        
				        <textarea class="form-control" name="v_resumen" placeholder="Llenar solo en caso que desee se muestre en el reporte global resumido"></textarea>
				    </div>
				    <input type="hidden" value="{{$idpregunta}}" name="i_codpreg">
				    
				    <div class="form-group">
				    	<button type="submit" class="btn btn-success">Registrar</button>
				      <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				<!-- </form> -->
				{{ Form::close() }}
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>

@include('subpreguntas.lista')

@endsection
