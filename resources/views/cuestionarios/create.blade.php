@extends('layouts.app')

@section('htmlheader_title')
	Agregar cuestionario
@endsection

@section('contentheader_title')
	Cuestionarios
@endsection

@section('contentheader_description')
	Agregar
@endsection

@section('main-content')

<div class="box-principal">
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
				      {{ Form::label('v_descuest', 'Descripción cuestionario:', ['class' => 'control-label'])}}
				      {{ Form::textarea('v_descuest', '', array_merge(['class' => 'form-control ckeditor','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
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
