<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de personas</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Nro</th>
          <th>DNI</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Nombres</th>
          <th>Cargo</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>Estado</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($personas as $index => $persona)
          <tr>
            <td>
              {{$index+1}}                
            </td>
            <td>
              {{$persona->v_numdni}}              	
            </td>
            <td>
              {!! $persona->v_apepat !!}
            </td>
            <td>
              {!! $persona->v_apemat !!}
            </td>
            <td>
              {!! $persona->v_nombre !!}
            </td>
            <td>
              {!! $persona->cargo->v_descargo !!}
            </td>
            <td>
              {!! $persona->v_email !!}
            </td>
            <td>
              {!! $persona->v_numtel !!}
            </td>
            <td>
            @if($persona->i_estreg==1)
                Vigente
            @else 
                No vigente
            @endif              
            </td>                        
            <td>
              <a class="btn btn-default" href="{{ url('/personas/'.$persona->i_codpersona.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
              {!! Form::open(array('route' => array('personas.destroy', $persona->i_codpersona), 'method' => 'delete')) !!}
                {{ Form::hidden('i_codopera', $operador->i_codopera) }}
                {{ Form::hidden('accion', $accion) }}
                <button onclick="return confirm('¿Desea quitar esta persona del Operador, tambien se eliminarán todos sus datos?')" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-trash text-danger"></span></button>
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    </div>
  </div>
 </div>
