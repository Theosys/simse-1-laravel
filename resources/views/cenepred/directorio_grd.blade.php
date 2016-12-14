@extends ('cenepred.base')
@section('contenido')
<h3>Directorio de Contacto en Gestión del Riesgo de Desastres - GRD</h3>

<div class="panel box box-primary">
	    <div class="box-header with-border">
	        <ul class="nav nav-tabs">
	            <li class="active"><a data-toggle="tab" href="#home">MINISTERIOS</a></li>    
	            <li><a data-toggle="tab" href="#menu1">GOBIERNOS REGIONALES</a></li>
	            <li><a data-toggle="tab" href="#menu2">GOBIERNOS LOCALES</a></li>
	        </ul>                
	    </div>    
	    <div class="tab-content">
		    <div id="home" class="tab-pane fade in active">
		      <h3>MINISTERIOS</h3>
		      <table  id="datatable" class="datatable" cellspacing="0" width="100%">
			        <thead>
			            <tr>                
			                <th>Entidad</th>
			                <th>Apellidos y Nombres</th>
			                <th>Email</th> 
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
			                <th></th>
			                <th></th>
			                <th></th>			               
			            </tr>
			        </tfoot>
			        <tbody>
			            
			        </tbody>        
		    	</table>
		    </div>
		    <div id="menu1" class="tab-pane fade">
		      <h3>GOBIERNOS REGIONALES</h3>
		      <table  id="datatable1" class="datatable" cellspacing="0" width="100%">
			        <thead>
			            <tr>                
			                <th>Entidad</th>
			                <th>Apellidos y Nombres</th>
			                <th>Email</th> 
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
			                <th></th>
			                <th></th>
			                <th></th>			               
			            </tr>
			        </tfoot>
			        <tbody>
			            
			        </tbody>        
		    	</table>
		    </div>
		    <div id="menu2" class="tab-pane fade">
		      	<h3>GOBIERNOS LOCALES</h3>
		      	<table  id="datatable3" class="datatable" cellspacing="0" width="100%">
			        <thead>
			            <tr>                
			                <th>Departamento</th>
			                <th>Provincia</th>
			                <th>Distrito</th>
			                <th>Apellidos y Nombres</th>
			                <th>Email</th> 
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
			                <th></th>
			                <th></th>
			                <th></th>			               
			                <th class="none"></th>			               
			                <th class="none"></th>			               
			            </tr>
			        </tfoot>
			        <tbody>
			            
			        </tbody>        
		    	</table>		    
		  	</div>
		</div> 
	</div>

<div style="clear: both;"></div>
</br>

<style type="text/css">
	tfoot {
		display:table-header-group !important;
	}
	.none {
		display:none !important;
	}
</style>
<!-- DataTables -->
<!-- <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script> -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<!-- page script -->
<script>

$('#datatable').DataTable( {        
        "ajax": {
            //"url": "https://script.google.com/macros/s/AKfycbwrwxyTppDDcL7d24QR7DiUIuZER9UihEXmmyS8FX0GLSm6cak/exec",
            //"url": "https://script.google.com/macros/s/AKfycbygukdW3tt8sCPcFDlkMnMuNu9bH5fpt7bKV50p2bM/exec?id=1jZzE1SsIUdl4A4dVCD9ahyVBCiP3ZTEU2sEG55dIX8U&amp;sheet=hoja1",
            //"url":"data.json",
            "url":"{{ asset('/cenepred/data/ministerios.json') }}",
            //"dataSrc": "tableData",
            "dataType": "json",
            "contentType": "application/json; charset=utf-8",
            "dataSrc": ""
        },
        
        "columns":[
     		{"data":"ENTIDAD"},{"data":"NOMBRES"},{"data":"EMAIL"},     		
    	],       
       "language": {
         "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
       }
               
    } );
//gores
$('#datatable1').DataTable( {        
        "ajax": {            
            "url":"{{ asset('/cenepred/data/gores.json') }}",            
            "dataType": "json",
            "contentType": "application/json; charset=utf-8",
            "dataSrc": ""

        },
        
        "columns":[
     		{"data":"ENTIDAD"},{"data":"NOMBRES"},{"data":"EMAIL"},     		
    	],       
       "language": {
         "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
       }             
} );

//locales
$('#datatable3').DataTable( {        
        "ajax": {            
            "url":"{{ asset('/cenepred/data/locales_1.json') }}",            
            "dataType": "json",
            "contentType": "application/json; charset=utf-8",
            "dataSrc": ""
        },
        
        "columns":[
     		{"data":"DEPARTAMENTO"},{"data":"PROVINCIA"},{"data":"PROVINCIA/DISTRITO"},{"data":"APELLIDOS_Y_NOMBRES"},{"data":"EMAIL"}     		
    	],       
       "language": {
         "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
       },
       initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }        
} );
</script>

@endsection