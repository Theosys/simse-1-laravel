@extends('layouts.app')

@section('htmlheader_title')
	Agregar pregunta
@endsection

@section('main-content')

<div class="box-principal">
<h3 class="titulo">Agregar Preguntas<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nueva pregunta</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="{{ url('/preguntas') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Pregunta</label>
				      <input class="form-control" name="v_despreg" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Descripción Resumen Reporte</label>
				        <input class="form-control" name="v_resumen" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Tipo de Pregunta</label>
				      <select name="i_codtipo" class="form-control">
				      	@foreach($tipoPregunta as $item)
				      		<option value="{{$item->i_codtipo}}">{{$item->v_destipo}}</option>
				      	@endforeach
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Clase de pregunta</label>
			        <select name="i_codtipclas" class="form-control">
				      	@foreach($tipoPreguntaClase as $item)
				      		<option value="{{$item->i_codtipclas}}">{{$item->v_destipoclas}}</option>
				      	@endforeach
				      </select>
				    </div>
				    <div class="form-group">
				    	<button type="submit" class="btn btn-success">Registrar</button>
				      <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>

@endsection
