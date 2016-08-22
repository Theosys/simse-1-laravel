<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de objetivos nacionales</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Código</th>
          <th>Objetivo Nacional</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($objnacionales as $objnac)
          <tr>
            <td>
              {{$objnac->i_codobjnac}}              	
            </td>
            <td>
              {{$objnac->v_desobjnac}}
            </td>
            <td>
              <a class="btn btn-default" href="{{ url('objetivosnacionales/'.$objnac->i_codobjnac.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
              {!! Form::open(array('route' => array('objetivosnacionales.destroy', $objnac->i_codobjnac), 'method' => 'delete')) !!}
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