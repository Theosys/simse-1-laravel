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
          <th>Objetivo Específico</th>
          <th>Nº Acciones</th>
          <th>Objetivo Estrategico</th>          
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($objespecificos as $objesp)
          <tr>
            <td>
              {{$objesp->i_codobjesp}}              	
            </td>
            <td>
              {{$objesp->v_desobjesp}}
            </td>
            <td>
              {{$objesp->acciones->count()}}
            </td>
            <td>
              {{$objesp->objEstrategico->v_desobjest}}             
            </td>            
            <td>
              <a class="btn btn-default" href="{{ url('objetivosespecificos/'.$objesp->i_codobjesp.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
              {!! Form::open(array('route' => array('objetivosespecificos.destroy', $objesp->i_codobjesp), 'method' => 'delete')) !!}
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