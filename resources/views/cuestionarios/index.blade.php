@extends('layouts.app')

@section('content')

  <div class="box-principal">
    <h3 class="titulo">Listado de Cuestionarios<hr></h3>
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
                <a class="btn btn-warning" href="{{ url('/cuestionarios/'.$cuestionario->i_codcuest.'/edit') }}">Editar</a>
                {!! Form::open(array('route' => array('cuestionarios.destroy', $cuestionario->i_codcuest), 'method' => 'delete')) !!}
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
