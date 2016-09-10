@extends('layouts.app')

@section('htmlheader_title')
	Editar alternativa
@endsection

@section('contentheader_title')
	Alternativa {{$alternativa->i_codalt}}
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar alternativa {{$alternativa->i_codalt}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('alternativas.update', $alternativa->i_codalt), 'method' => 'put')) !!}
            <div class="form-group">
              <p>Pregunta : <b> {{$alternativa->pregunta->v_despreg}}</b> </p>                           
            </div>
              {{ Form::hidden('i_codpreg', $alternativa->pregunta->i_codpreg) }}
            <div class="form-group">              
              {{ Form::label('v_desalt', 'Descripción Alternativa:', ['class' => 'control-label'])}}
              {{ Form::textarea('v_desalt', $alternativa->v_desalt, array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
            </div>
            @if ($alternativa->pregunta->i_codtipo==4)
            <div class="form-group">                            
                {{ Form::label('v_orienta', 'Tipo Orientación Matricial', ['class' => 'control-label'])}}
                {{ Form::select('v_orienta', $mat_orienta, $alternativa->v_orienta, ['class' => 'form-control', 'required']) }}
            </div>
            @endif
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
