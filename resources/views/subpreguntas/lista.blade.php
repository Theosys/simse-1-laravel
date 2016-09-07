<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de subpreguntas</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Código</th>
          <th>Pregunta</th>
          <th>Tipo</th>
          <th>Alternativas</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($subpreguntas as $subpreg)
          <tr>
            <td>
              {{$subpreg->i_codsubpreg}}              	
            </td>
            <td>
              {!! $subpreg->v_dessubpreg !!}
            </td>
            <td>
              {{$subpreg->tipo->v_destipo}}
            </td>
            <td>
              @if ($subpreg->i_codtipo!=1)
                <a class="btn btn-default" href="{{ url('/subalter/'.$subpreg->i_codsubpreg.'/agregar') }}"> ({{$subpreg->alternativas->count()}})  <small><span class="glyphicon glyphicon-plus"></span></small></a>
              @endif
              
            </td>
            <td>
              <a class="btn btn-default" href="{{ url('/subpreg/'.$subpreg->i_codsubpreg.'/editar') }}"><span class="glyphicon glyphicon-pencil"></span></a>
              {!! Form::open(array('route' => array('subpreguntas.destroy', $subpreg->i_codsubpreg), 'method' => 'delete')) !!}
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