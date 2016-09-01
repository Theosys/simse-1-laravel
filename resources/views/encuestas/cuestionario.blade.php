@extends('layouts.app')

@section('htmlheader_title')
  	Encuesta
@endsection

@section('contentheader_title')
	Encuesta  
@endsection


@section('main-content')
	<div class="row">
		<div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">{{$encuesta->v_desenc}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            {{ Form::open(array('route' => array('encuestas.store'), 'method' => 'post', 'files' => true)) }}
            {{csrf_field()}}
                <input type="hidden" name="operador" value="{{$operador}}">
                <input type="hidden" name="encuesta" value="{{$encuesta->i_codenc}}">
                <div class="panel">
                    <button type="submit" class="btn btn-app bg-green color-palette"><i class="fa fa-save"></i>Registrar</button>
                </div>
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                
				@foreach ($indicadores as $indicador)
    

                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      {{--<a data-toggle="collapse" data-parent="#accordion" href="#{{ $indicador->i_codind }}" aria-expanded="false" class="collapsed">--}}
                        {{ $indicador->i_numind.'. '.$indicador->v_desind }}
                      {{--</a>--}}
                    </h4>
                  </div>
                  <div id="{{ $indicador->i_codind }}">
                      {{--<div id="{{ $indicador->i_codind }}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">    --}}
                    <div class="box-body">
                    	@foreach ($preguntas as $pregunta)
                    		@if ($pregunta->pivot->i_codind == $indicador->pivot->i_codind)
                                @if ($pregunta->i_codtipo == 1)
                                    @include('partials.abierta')
                                    @foreach ($pregunta->subpreguntas as $subpregunta)
                                        @if ($subpregunta->i_codtipo == 1)
                                            @include('partials.spabierta')
                                        @elseif ($subpregunta->i_codtipo == 2)
                                            @include('partials.spopcionmultiple')
                                        @elseif ($subpregunta->i_codtipo == 3)
                                            @include('partials.spopcionunica')
                                        @elseif ($subpregunta->i_codtipo == 4)
                                            @include('partials.spopcionmatricial')
                                        @endif
                                    @endforeach
                                @elseif ($pregunta->i_codtipo == 2)
                                    @include('partials.opcionmultiple')
                                    @foreach ($pregunta->subpreguntas as $subpregunta)
                                        @if ($subpregunta->i_codtipo == 1)
                                            @include('partials.spabierta')
                                        @elseif ($subpregunta->i_codtipo == 2)
                                            @include('partials.spopcionmultiple')
                                        @elseif ($subpregunta->i_codtipo == 3)
                                            @include('partials.spopcionunica')
                                        @elseif ($subpregunta->i_codtipo == 4)
                                            @include('partials.spopcionmatricial')
                                        @endif
                                    @endforeach
                                @elseif ($pregunta->i_codtipo == 3)
                                    @include('partials.opcionunica')
                                    @foreach ($pregunta->subpreguntas as $subpregunta)
                                        @if ($subpregunta->i_codtipo == 1)
                                            @include('partials.spabierta')
                                        @elseif ($subpregunta->i_codtipo == 2)
                                            @include('partials.spopcionmultiple')
                                        @elseif ($subpregunta->i_codtipo == 3)
                                            @include('partials.spopcionunica')
                                        @elseif ($subpregunta->i_codtipo == 4)
                                            @include('partials.spopcionmatricial')
                                        @endif
                                    @endforeach
                                @elseif ($pregunta->i_codtipo == 4)
                                    @include('partials.opcionmatricial')
                                    @foreach ($pregunta->subpreguntas as $subpregunta)
                                        @if ($subpregunta->i_codtipo == 1)
                                            @include('partials.spabierta')
                                        @elseif ($subpregunta->i_codtipo == 2)
                                            @include('partials.spopcionmultiple')
                                        @elseif ($subpregunta->i_codtipo == 3)
                                            @include('partials.spopcionunica')
                                        @elseif ($subpregunta->i_codtipo == 4)
                                            @include('partials.spopcionmatricial')
                                        @endif
                                    @endforeach
                                @endif
                            @endif
						@endforeach
                    </div>
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

<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 2.1.4 -->
	<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<script type="text/javascript">
	
</script>