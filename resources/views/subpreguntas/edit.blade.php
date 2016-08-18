@extends('layouts.app')

@section('htmlheader_title')
	Editar subpregunta
@endsection

@section('contentheader_title')
	subpregunta {{$subpregunta->i_codsubpreg}}
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar subpregunta {{$subpregunta->i_codsubpreg}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('subpreguntas.update', $subpregunta->i_codsubpreg), 'method' => 'put')) !!}
            <div class="form-group">
              {{ Form::label('v_dessubpreg', 'DDescripción SubPregunta:', ['class' => 'control-label']) }}
              {{ Form::text('v_dessubpreg', $subpregunta->v_dessubpreg, array_merge(['class' => 'form-control'])) }}
            </div>            
            <div class="form-group">
              <label class="control-label">Pregunta:</label>
              <select name="i_codpreg" class="form-control">
                @foreach($preguntas as $pregunta)
                  @if ($pregunta->i_codpreg == $subpregunta->i_codpreg)
                    <option value="{{$pregunta->i_codpreg}}"  selected>{{$pregunta->v_despreg}}</option>
                  @else
                    <option value="{{$pregunta->i_codpreg}}">{{$pregunta->v_despreg}}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">Tipo subpregunta:</label>
				      <select name="i_codtipo" class="form-control">
                @foreach($tiposubpregunta as $item)
                  @if ($item->i_codtipo == $subpregunta->i_codtipo)
                    <option value="{{$item->i_codtipo}}"  selected>{{$item->v_destipo}}</option>
                  @else
                    <option value="{{$item->i_codtipo}}">{{$item->v_destipo}}</option>
                  @endif
                @endforeach
				      </select>
            </div>
            <div class="form-group">
              <label class="control-label">Clase subpregunta:</label>
              <select name="i_codtipclas" class="form-control">
                @foreach ($tiposubpreguntaClase as $item)
                  @if ($item->i_codtipclas == $subpregunta->i_codtipclas)
                    <option value="{{$item->i_codtipclas}}"  selected>{{$item->v_destipoclas}}</option>
                  @else
                    <option value="{{$item->i_codtipclas}}">{{$item->v_destipoclas}}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">¿Se solicitará medio de verificación?:</label>
                  @if ($subpregunta->i_verifica == 0)                    
                    <label><input name="i_verifica" value="{{$subpregunta->i_verifica}}" checked="" type="radio"> NO</label>
                    <label><input name="i_verifica" value="1" type="radio"> SI</label>
                  @else                    
                    <label><input name="i_verifica" value="0"  type="radio"> NO</label>
                    <label><input name="i_verifica" value="{{$subpregunta->i_verifica}}" checked="" type="radio"> SI</label>
                  @endif
            </div>
            <div class="form-group">
              {{ Form::label('v_resumen', 'Descripción Resumen Reporte:', ['class' => 'control-label'])}}
              {{ Form::text('v_resumen', $subpregunta->v_resumen, array_merge(['class' => 'form-control','placeholder'=>'Llenar solo en caso que desee se muestre en el reporte global resumido'])) }}
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
