@extends('layouts.app')

@section('htmlheader_title')
  	Encuesta
@endsection

@section('contentheader_title')
	Encuesta  
@endsection


@section('main-content')
	<div class="row">
		<div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Collapsible Accordion</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                
				@foreach ($indicadores as $indicador)
    

                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#{{ $indicador->i_codind }}" aria-expanded="false" class="collapsed">
                        {{ $indicador->i_numind.'. '.$indicador->v_desind }}
                      </a>
                    </h4>
                  </div>
                  <div id="{{ $indicador->i_codind }}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="box-body">
						
                    	@include('partials.tipoabierta')
                    </div>
                  </div>
                </div>               
                @endforeach
				
              </div>
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