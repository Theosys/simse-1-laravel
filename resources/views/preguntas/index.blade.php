@extends('layouts.app')

@section('htmlheader_title')
  Preguntas
@endsection

@section('contentheader_title')
  Preguntas
@endsection

@section('contentheader_description')
  Listado
@endsection

@section('main-content')

<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de preguntas</h3>
    </div>
    <div class="panel-body">
      <div class="box-body">
          <a class="btn btn-app" href="{{url('/preguntas/create')}}">
              <i class=" glyphicon glyphicon-plus"></i>Nueva pregunta
          </a>                      
      </div>
      <table class="table table-striped table-hover datatable ">
      <thead>
        <tr>
          <th>Código</th>
          <th>Pregunta</th>
          <th>Tipo</th>
          <th>Alternativas</th>
          <th>Subpreguntas</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($preguntas as $pregunta)
          <tr>
            <td>
              {{$pregunta->i_codpreg}}
            </td>
            <td>
              {{$pregunta->v_despreg}}
            </td>
            <td>
              {{$pregunta->tipo->v_destipo}}
            </td>
            <td>
              @if ($pregunta->i_codtipo!=1)
              <a class="btn btn-default" href="{{ url('/alter/'.$pregunta->i_codpreg.'/agregar') }}"> ({{$pregunta->alternativas->count()}})  <small><span class="glyphicon glyphicon-plus"></span></small></a>
              @endif
            </td>
            <td>              
              <a class="btn btn-default" href="{{ url('/subpreg/'.$pregunta->i_codpreg.'/agregar') }}"> ({{$pregunta->subpreguntas->count()}})  <small><span class="glyphicon glyphicon-plus"></span></small></a>
            </td>
            <td>
              <a class="btn btn-default" href="{{ url('/preguntas/'.$pregunta->i_codpreg.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
              {!! Form::open(array('route' => array('preguntas.destroy', $pregunta->i_codpreg), 'method' => 'delete')) !!}
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-trash text-danger"></span></button>
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    </div>
  </div>
</div>
@include('cenepred.datatable')
@endsection
