@extends('layouts.app')

@section('content')
<div class="box-principal">
<h3 class="titulo">Editar Pregunta {{$pregunta->I_NUMPREG}}<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar pregunta {{$pregunta->I_NUMPREG}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('preguntas.update', $pregunta->I_CODPREG), 'method' => 'put')) !!}
            <div class="form-group">
              {{ Form::label('v_despreg', 'Descripción Resumen Reporte:', ['class' => 'control-label']) }}
              {{ Form::text('v_despreg', $pregunta->V_DESPREG, array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
              {{ Form::label('v_resumen', 'Descripción Pregunta:', ['class' => 'control-label'])}}
              {{ Form::text('v_resumen', $pregunta->V_RESUMEN, array_merge(['class' => 'form-control'])) }}
				    </div>
            <div class="form-group">
              <label class="control-label">Tipo Pregunta:</label>
				      <select name="i_codtipo" class="form-control">
                @foreach($tipoPregunta as $item)
                  @if ($item->I_CODTIPO == $pregunta->I_CODTIPO)
                    <option value="{{$item->I_CODTIPO}}"  selected>{{$item->V_DESTIPO}}</option>
                  @else
                    <option value="{{$item->I_CODTIPO}}">{{$item->V_DESTIPO}}</option>
                  @endif
                @endforeach
				      </select>
            </div>
            <div class="form-group">
              <label class="control-label">Clase Pregunta:</label>
				      <select name="i_codtipclas" class="form-control">
                @foreach ($tipoPreguntaClase as $item)
                  @if ($item->I_CODTIPCLAS == $pregunta->I_CODTIPCLAS)
                    <option value="{{$item->I_CODTIPCLAS}}"  selected>{{$item->V_DESTIPOCLAS}}</option>
                  @else
                    <option value="{{$item->I_CODTIPCLAS}}">{{$item->V_DESTIPOCLAS}}</option>
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
