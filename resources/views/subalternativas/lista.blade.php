<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de alternativas</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Código</th>
          <th>Alternativa</th>
          <th>Resumen Reporte</th>
          <th>Alt. Clave</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($alternativas as $alter)
          <tr>
            <td>
              {{$alter->i_codsubalt}}              	
            </td>
            <td>
              {{$alter->v_dessubalt}}
            </td>
            <td>
              {{$alter->v_resumen}}
            </td>
            <td>
            @if ($alter->i_clave==1)
              X
            @endif
            </td>
            <td>
              <a class="btn btn-default" href="{{ url('/subalter/'.$alter->i_codsubalt.'/editar') }}"><span class="glyphicon glyphicon-pencil"></span></a>
              {!! Form::open(array('route' => array('subalternativas.destroy', $alter->i_codsubalt), 'method' => 'delete')) !!}
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