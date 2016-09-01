<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de Acciones</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nombre de Accion</th>
          <th>Descripción de Accion</th>
          <th>Tipo</th>
          <th>Nº Indicadores</th>
          <th>Objetivo Estratégico</th>          
          <th>Objetivo Específico</th>          
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($acciones as $accion)
          <tr>
            <td>
              {{$accion->i_codaccion}}              	
            </td>
            <td>
              {{$accion->v_desaccion}}
            </td>
            <td>
              {{$accion->v_desaccion}}
            </td>
            <td>
              Estrategico
            </td>
            <td>
              {{$accion->indicadores->count()}}
            </td>
            <td>
              Obj. Estrat. # 
            </td>
            <td>
              Obj. Espec # {{$accion->objEspecifico->i_codobjesp}}             
            </td>            
            <td>
              <a class="btn btn-default" href="{{ url('acciones/'.$accion->i_codaccion.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
              {!! Form::open(array('route' => array('acciones.destroy', $accion->i_codaccion), 'method' => 'delete')) !!}
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