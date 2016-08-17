@extends('layouts.app')

@section('htmlheader_title')
  	Registrar / Actualizar Encuestas
@endsection

@section('contentheader_title')
	Registrar / Actualizar Encuestas  
@endsection


@section('main-content')
	<div class="row">
		<div class="col-md-6 col-sm-12 col-sm-offset-3">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Encuesta a registrar</h3>
				</div>
				{{ Form::open(array('url' => url('/cuestionario'))) }}				
				{{csrf_field()}}
				<div class="box-body">
					<div class="form-group">
						{{ Form::label('encuesta', 'Encuesta:',['class' => 'control-label']) }}
						{{ Form::select('encuesta', $encuestas, null, ['class' => 'form-control']) }}				
					</div>		
					<div class="form-group">
						{{ Form::label('tipOrg', 'Tipo de Organismo:',['class' => 'control-label']) }}
						{{ Form::select('tipOrg', $tipoOrganismos, null, ['placeholder' => 'Seleccione organismo...', 'class' => 'form-control', 'id' => 'tiporg']) }}				
					</div>
					<div class="form-group">
						{{ Form::label('i_codopera', 'Operador:',['class' => 'control-label']) }}
						<select class="form-control" name="i_codopera" id="operador">
  							<option>Seleccione operador...</option>
  						</select>
					</div>		
				</div>
				<div class="box-footer">
		               {{ Form::submit('Aceptar', ['class' => 'btn btn-primary']) }}
		        </div>
				{{ Form::close() }}
			</div>
		</div>
		<!-- Listar encuestas del operador -->
		{{--<div class="col-md-6 col-sm-12 col-sm-offset-3">
			<div class="box box-primary">
			@foreach ($encuestasOperador as $encuestaOp)
			
			<div class="progress-group">
	            <span class="progress-text">{{$encuestaOp->v_desenc}}</span>
	            <span class="progress-number"><b>{{$encuestaOp->pivot->n_complet}}</b>/100</span>

	            <div class="progress sm">
	                <div class="progress-bar progress-bar-aqua" style="width: {{$encuestaOp->pivot->n_complet}}%"></div>
	            </div>
	        </div>

			@endforeach
			</div>
		</div>--}}
		
	</div>	
@endsection
	<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 2.1.4 -->
	<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

	<script type="text/javascript">
		$( document ).ready(function(){			
			$('#tiporg').change(function(){
				$('#operador').empty();
  				$.getJSON('{{ url('/cargaroperadores?tiporg=') }}' + $('#tiporg').val(), function(data) {
		        	$.each(data, function(k, v) {
		          		$('#operador').append("<option value=\""+v.i_codopera+"\">"+v.v_desoperador+"</option>");
		        	});
	      		});			
  			});
		});	
  		
	</script>
