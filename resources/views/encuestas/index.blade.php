@extends('layouts.app')

@section('htmlheader_title')
  	Registrar / Actualizar Encuestas
@endsection

@section('contentheader_title')
	Registrar / Actualizar Encuestas  
@endsection


@section('main-content')
	<div class="row">
		{{--<div class="col-md-6 col-sm-12 col-sm-offset-3">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Encuesta a registrar {{$encuestas->count()}}</h3>
				</div>
				{{ Form::open(array('url' => url('/cuestionario'))) }}				
				{{csrf_field()}}
				<div class="box-body">
					<div class="form-group">
						{{ Form::label('encuesta', 'Encuesta:',['class' => 'control-label']) }}
						{{ Form::select('encuesta', $encuestas, null, ['class' => 'form-control']) }}				
					</div>		
					--}}{{--<div class="form-group">
						{{ Form::label('tipOrg', 'Tipo de Organismo:',['class' => 'control-label']) }}
						{{ Form::select('tipOrg', $tipoOrganismos, null, ['placeholder' => 'Seleccione organismo...', 'class' => 'form-control', 'id' => 'tiporg']) }}				
					</div>
					<div class="form-group">
						{{ Form::label('i_codopera', 'Operador:',['class' => 'control-label']) }}
						<select class="form-control" name="i_codopera" id="operador">
  							<option>Seleccione operador...</option>
  						</select>
					</div>--}}{{--
				</div>
				<div class="box-footer">
		               {{ Form::submit('Aceptar', ['class' => 'btn btn-primary']) }}
		        </div>
				{{ Form::close() }}
			</div>
		</div>--}}
		<!-- Listar encuestas del operador -->
		{{--<div class="col-md-6 col-sm-12 col-sm-offset-3">
			<div class="box box-primary">
				@foreach ($encuestasOperador as $encuestaOp)

				<div class="progress-group">
					<span class="progress-text"><a href="{{url('/actualizar/'.$encuestaOp->pivot->i_codopera.'/'.$encuestaOp->i_codenc)}}">{{$encuestaOp->v_desenc}}</a></span>
					<span class="progress-number"><b>{{$encuestaOp->pivot->n_complet}}</b>/100</span>

					<div class="progress sm">
						<div class="progress-bar progress-bar-aqua" style="width: {{$encuestaOp->pivot->n_complet}}%"></div>
					</div>
				</div>

				@endforeach
			</div>
		</div>--}}


		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Mis encuestas</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered">						
						<tbody>
							<tr>
								<th>N°</th>
								<th>ENCUESTA</th>
								<th>PERIODO</th>
								<th>FECHA APERTURA</th>
								<th>FECHA CIERRE</th>
								<th>COMPLETADO</th>
								<th>ESTADO</th>
							</tr>
							@foreach ($encuestasOperador as $encuestaOp)
							<tr>
								<td>{{ $encuestaOp->pivot->i_codenc }}</td>
								<td>
									@if($encuestaOp->pivot->i_codenc == 11)
										<a href="{{url('/encuestas/'.$encuestaOp->pivot->i_codopera.'/'.$encuestaOp->i_codenc)}}">{{$encuestaOp->v_desenc}}</a>
									@else
										{{ $encuestaOp->v_desenc }}
									@endif
								</td>
								<td>{{ $encuestaOp->v_periodo }}</td>
								<td>{{ $encuestaOp->pivot->d_fecini }}</td>
								<td>{{ $encuestaOp->pivot->d_fecfin }}</td>
								<td>{{ $encuestaOp->pivot->n_complet }}</td>
								<td>
									@if ($encuestaOp->pivot->i_estreg==1)
										<b>Aperturado</b>									
									@else
										Cerrado
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">

				</div>
			</div>
			<!-- /.box -->
		</div>
	</div>	
@endsection
	<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 2.1.4 -->
{{--
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
--}}
