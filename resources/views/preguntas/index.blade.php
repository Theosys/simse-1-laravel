@extends('layouts.app')

@section('htmlheader_title')
  Preguntas
@endsection


@section('main-content')

<div class="box-principal">
  <h3 class="titulo">Listado de preguntas<hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de preguntas</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Cod pregunta</th>
          <th>Pregunta</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($preguntas as $pregunta)
          <tr>
            <td>
              <a href="{{ url('/preguntas/show/'.$pregunta->i_codpreg) }}">{{$pregunta->i_codpreg}}</a>
            </td>
            <td>
              {{$pregunta->v_despreg}}
            </td>
            <td>
              <a class="btn btn-warning" href="{{ url('/preguntas/'.$pregunta->i_codpreg.'/edit') }}">Editar</a>
              {!! Form::open(array('route' => array('preguntas.destroy', $pregunta->i_codpreg), 'method' => 'delete')) !!}
                <button type="submit" class="btn btn-danger">Eliminar</button>
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
