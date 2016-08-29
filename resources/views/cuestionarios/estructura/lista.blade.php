<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de preguntas</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Numero</th>
          <th>Indicador</th>
          <th>Pregunta</th>          
          <th>Pregunta Clave</th>          
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>        
        @foreach($preguntas as $index  => $pregunta)
          <tr>
            <td>
              {{$index+1}}  	
            </td>
            <td>
             ind
            </td>
            <td>
              {{$pregunta->v_despreg}}
            </td>
            <td>
              X
            </td>                       
            <td>              
              {!! Form::open(array('route' => array('estruccuest.destroy', $pregunta->i_codpreg), 'method' => 'delete')) !!}
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