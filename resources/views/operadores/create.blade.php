@extends('layouts.app')

@section('htmlheader_title')
	Agregar cuestionario
@endsection

@section('main-content')

<div class="box-principal">
<h3 class="titulo">Agregar cuestionarios<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nuevo cuestionario</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="{{ url('/cuestionarios') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
				    <div class="form-group">
				      <label for="v_descuest" class="control-label">Descripción cuestionario:</label>
				      <input class="form-control" name="v_descuest" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="i_codplan" class="control-label">Plan de seguimiento:</label>
				      <select name="i_codplan" class="form-control">
				      	@foreach($planes as $plan)
				      		<option value="{{$plan->i_codplan}}">{{$plan->v_desplan}}</option>
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
