@extends('layouts.app')

@section('htmlheader_title')
	Editar Mision Vision
@endsection

@section('contentheader_title')
	
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Mision y Visión</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('planseguimientos.update', $planseg->i_codplan), 'method' => 'put')) !!}
            <div class="form-group">              
              {{ Form::label('v_mision', 'Mision:', ['class' => 'control-label'])}}
              {{ Form::textarea('v_mision', $planseg->v_mision, array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40])) }}
            </div>
            <div class="form-group">
              {{ Form::label('v_vision', 'Vision:', ['class' => 'control-label'])}}
              {{ Form::textarea('v_vision', $planseg->v_vision, array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40])) }}
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