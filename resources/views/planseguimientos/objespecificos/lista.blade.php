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
          <th>Objetivo Estrategico</th>
          <th>Nº Objetivos Especificos</th>
          <th>Objetivo Nacional</th>
          <th>Resp. Monitoreo</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($objestrategicos as $objest)
          <tr>
            <td>
              {{$objest->i_codobjest}}              	
            </td>
            <td>
              {{$objest->v_desobjest}}
            </td>
            <td>
              {{$objest->objEspecificos}}
            </td>
            <td>
              {{$objest->objNacional->v_desobjnac}}             
            </td>
            <td>
              {{$objest->institucion->v_desinst}}
            </td>
            <td>
              <a class="btn btn-default" href="{{ url('objetivosestrategicos/'.$objest->i_codobjest.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
              {!! Form::open(array('route' => array('objetivosestrategicos.destroy', $objest->i_codobjest), 'method' => 'delete')) !!}
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