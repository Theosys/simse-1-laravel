@extends('layouts.app')

@section('htmlheader_title')
	Editar alternativa
@endsection

@section('contentheader_title')
	Subpregunta: 
@endsection

@section('contentheader_description')
	{{ preg_replace('/(<.*?>)|(&.*?;)/', '', $alternativa->subpregunta->v_dessubpreg) }}
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar alternativa {{$alternativa->i_codsubalt}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('subalternativas.update', $alternativa->i_codsubalt), 'method' => 'put')) !!}            
              {{ Form::hidden('i_codsubpreg', $alternativa->subpregunta->i_codsubpreg) }}
            <div class="form-group">              
              {{ Form::label('v_dessubalt', 'Descripción Alternativa:', ['class' => 'control-label'])}}
              {{ Form::textarea('v_dessubalt', $alternativa->v_dessubalt, array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
            </div>
            <div class="form-group">              
              {{ Form::label('v_resumen', 'Descripción Resumen Reporte:', ['class' => 'control-label'])}}
              {{ Form::textarea('v_resumen', $alternativa->v_resumen, array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese el resumen aqui'])) }}
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
