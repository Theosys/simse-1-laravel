<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de objetivos estrategicos</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Código</th>
          <th>Versión</th>
          <th>Fecha vigencia</th>
          <th># Indicadores</th>
          <th colspan="2"># Preguntas</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($versiones as $version)
          <tr>
            <td>
              {{$version->i_codver}}              	
            </td>
            <td>
              {{$version->v_desver}}
            </td>
            <td>
              {{$version->d_fecvig}}
            </td>
            <td>
              ind number
            </td>
            <td>
             preg number           
            </td>
            <td>
              <a class="btn btn-default" href="{{ url('cuestionarios/version/'.$version->i_codver.'/add') }}"><span class="glyphicon glyphicon-plus"></span></a>
            </td>
            <td>
              <a class="btn btn-default" href="{{ url('versiones/'.$version->i_codver.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
              {!! Form::open(array('route' => array('versiones.destroy', $version->i_codver), 'method' => 'delete')) !!}
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