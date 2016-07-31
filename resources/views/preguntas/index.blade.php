@extends('layouts.app')

@section('content')

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
              <a href="{{ url('/preguntas/show/'.$pregunta->I_CODPREG) }}">{{$pregunta->I_CODPREG}}</a>
            </td>
            <td>
              {{$pregunta->V_DESPREG}}
            </td>
            <td>
              <a class="btn btn-warning" href="{{ url('/preguntas/'.$pregunta->I_CODPREG.'/edit') }}">Editar</a>
              {!! Form::open(array('route' => array('preguntas.destroy', $pregunta->I_CODPREG), 'method' => 'delete')) !!}
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
