@extends('layouts.app')

@section('htmlheader_title')
	Agregar PlanSeguimiento
@endsection

@section('contentheader_title')
	PlanSeguimiento
@endsection

@section('contentheader_description')
	Agregar
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nuevo Plan de Seguimiento</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="{{ url('/planseguimientos') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Descripción Plan</label>
				        <input class="form-control" name="v_desplan" required="" type="text">
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Sigla</label>
				        <input class="form-control" name="v_sigla" required="" type="text">
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Fecha de Inicio</label>
				        <input class="form-control" name="d_fecini" required="" type="text">
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Fecha de Fin</label>
				        <input class="form-control" name="d_fecfin" required="" type="text">
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
