@extends('layouts.app')

@section('htmlheader_title')
	Editar pregunta
@endsection

@section('contentheader_title')
	Pregunta {{$pregunta->i_numpreg}}
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar pregunta {{$pregunta->i_numpreg}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('preguntas.update', $pregunta->i_codpreg), 'method' => 'put')) !!}
            <div class="form-group">
              {{ Form::label('v_despreg', 'Descripción Resumen Reporte:', ['class' => 'control-label']) }}
              {{ Form::text('v_despreg', $pregunta->v_despreg, array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
              {{ Form::label('v_resumen', 'Descripción Pregunta:', ['class' => 'control-label'])}}
              {{ Form::text('v_resumen', $pregunta->v_resumen, array_merge(['class' => 'form-control'])) }}
				    </div>
            <div class="form-group">
              <label class="control-label">Tipo Pregunta:</label>
				      <select name="i_codtipo" class="form-control">
                @foreach($tipoPregunta as $item)
                  @if ($item->i_codtipo == $pregunta->i_codtipo)
                    <option value="{{$item->i_codtipo}}"  selected>{{$item->v_destipo}}</option>
                  @else
                    <option value="{{$item->i_codtipo}}">{{$item->v_destipo}}</option>
                  @endif
                @endforeach
				      </select>
            </div>
            <div class="form-group">
              <label class="control-label">Clase Pregunta:</label>
				      <select name="i_codtipclas" class="form-control">
                @foreach ($tipoPreguntaClase as $item)
                  @if ($item->i_codtipclas == $pregunta->i_codtipclas)
                    <option value="{{$item->i_codtipclas}}"  selected>{{$item->v_destipoclas}}</option>
                  @else
                    <option value="{{$item->i_codtipclas}}">{{$item->v_destipoclas}}</option>
                  @endif
                @endforeach
				      </select>
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
