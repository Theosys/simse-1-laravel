@extends('layouts.app')

@section('htmlheader_title')
  	Encuesta
@endsection

@section('contentheader_title')
	{{$encuesta->v_desenc}}
@endsection


@section('main-content')
	<div class="row">
		<div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Proceda a seleccionar las preguntas que se mostrarán en la encuesta </h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            {{ Form::open(array('route' => array('encuestas.store'), 'method' => 'post', 'files' => true)) }}
            {{csrf_field()}}                
                <input type="hidden" name="encuesta" value="{{$encuesta->i_codenc}}">                
                    <button type="submit" class="btn btn-app bg-green color-palette"><i class="fa fa-save"></i>Actualizar</button>

                    <div class="panel box box-primary">
                        @foreach ($indicadores as $indicador)
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        {{--<a data-toggle="collapse" data-parent="#accordion" href="#{{ $indicador->i_codind }}" aria-expanded="false" class="collapsed">--}}
                                        {{ $indicador->i_numind.'. '.$indicador->v_desind }}
                                        {{--</a>--}}
                                    </h4>
                                </div>
                                <div id="{{ $indicador->i_codind }}">                
                                    <div class="box-body">
                                        @foreach ($preguntas as $pregunta)
                                            @if ($pregunta->pivot->i_codind == $indicador->pivot->i_codind)
                                                <p>
                                                	<input type="checkbox" name="i_codoreg" id="" value="{{$pregunta->i_codoreg}}">
                                                	{{$pregunta->v_despreg}}</p>
                                            @endif
                                        @endforeach
                                    </div>            
                            	</div>
                        @endforeach
                    </div>
            {{ Form::close() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
	</div>
@endsection
	
</script>