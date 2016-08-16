@extends('layouts.app')

@section('htmlheader_title')
  Cuestionarios
@endsection

@section('contentheader_title')
  Cuestionarios
@endsection

@section('contentheader_description')
  Listado
@endsection

@section('main-content')

  <div class="box-principal">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Listado de cuestionarios</h3>
      </div>
      <div class="panel-body">
        <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Cuestionario</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          @foreach($cuestionarios as $cuestionario)
            <tr>
              <td>
                <a href="{{ url('/cuestionarios/show/'.$cuestionario->i_codcuest) }}">{{$cuestionario->i_codcuest}}</a>
              </td>
              <td>
                {{$cuestionario->v_descuest}}
              </td>
              <td>
                <a class="btn btn-default" href="{{ url('/cuestionarios/'.$cuestionario->i_codcuest.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
                {!! Form::open(array('route' => array('cuestionarios.destroy', $cuestionario->i_codcuest), 'method' => 'delete')) !!}
                  <button type="submit" class="btn btn-default"><span class="text-danger glyphicon glyphicon-trash"></span></button>
                {!! Form::close() !!}
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      </div>
    </div>
  </div>

@endsection
