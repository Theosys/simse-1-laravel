@extends('cenepred.base')

@section('contenido') 
<div class="container-fluid">
 <table class="table table-stdiped table-hover datatables">
 <thead>
	 <tr>
	 	<th rowspan="2" class="border-b">Nro</th>
	 	<th rowspan="2" class="border-b"><span class="glyphicon glyphicon-sort"></span>NOMBRE</th>
	 	<th rowspan="2" class="border-b"><span class="glyphicon glyphicon-sort"></span>GUIA TECNICA </th>
	 	<th colspan="2">RESOLUCION MINISTERIAL</th>
	 	<th colspan="2">RESOLUCION JEFATURAL</th>
	 	<th colspan="2">DIRECTIVA</th>	 	
	 </tr>
	 <tr>
	 	<th class="border-b"> <span class="glyphicon glyphicon-sort"></span>R.M.</th>
	 	<th class="border-b fx"> <span class="glyphicon glyphicon-sort"></span>FECHA</th>
	 	<th class="border-b"><span class="glyphicon glyphicon-sort"></span>R.J.</th>
	 	<th class="border-b fx"><span class="glyphicon glyphicon-sort"></span>FECHA</th>
	 	<th class="border-b"><span class="glyphicon glyphicon-sort"></span>Nro</th>
	 	<th class="border-b fx"><span class="glyphicon glyphicon-sort"></span>FECHA</th>	 	 	
	 </tr>
 </thead>
 <tbody>
	<tr>
		<td>01</td>
		<td>Guia para elaborar el estudio socioeconomico, cultural y ambiental para el reasentamiento poblacional en zonas de muy alto riesgo no mitigable</td>	 	
		<td><a target="_blank" href="{{ asset('/cenepred/docs/I-GUI-guia-metodologica-para-elaborar-el-estudio-socioeconomico-y-cultural-para-el-reasentamiento-poblacional-en-zonas-de-muy-alto-riesgo-no-mitigable.pdf.pdf') }}">
			<span class="glyphicon glyphicon-file"></span>Guia Técnica</a>
		</td>
	 	<td>  </td>
		<td>  </td>
		<td><a href="{{ asset('/cenepred/docs/I-RJ-ResolucionesJefaturales085-2016.pdf') }}" target="_blank"> <span class="glyphicon glyphicon-file"></span>Resolucion Jefatural N° 085-2016-CENEPRED/J</a></td>
		<td>21/06/2016</td>
		<td>Directiva N° 005-2014-CENEPRED/J</td>
		<td></td>		
	</tr>
	<tr>
	 	<td>02</td>
	 	<td>Guia metodologica para la elaboracion del plan de reasentamiento poblacional en zonas de muy alto riesgo no mitigable</td>
	 	<td> <a target="_blank" href="{{ asset('/cenepred/docs/II-GUI-guia-plan-de-reasentamiento-2016.pdf') }}"><span class="glyphicon glyphicon-file"></span>Guia Técnica N° 08</a> </td>	 	
	 	<td>  </td>
		<td>  </td>
		<td><a target="_blank" href="{{ asset('/cenepred//docs/II-RJ-ResolucionJefatural-093-2016-GuiaPlanReasentamiento.pdf') }}"><span class="glyphicon glyphicon-file"></span>Resolucion Jefatural N° 093-2016-CENEPRED/J</a></td>
		<td>28/06/2016</td>
		<td>Directiva N° 005-2014-CENEPRED/J</td>
		<td></td>		
	</tr>
	<tr>
	 	<td>03</td>
	 	<td>Guia para elaborar el estudio socioeconomuco, cultural y ambiental para el reasentamiento poblacional en zonas de muy alto riesgo no mitigable</td>
	 	<td><a target="_blank" href="{{ asset('/cenepred/docs/III-GUI-guia-estudio-socioeconomico-reasentamiento.pdf') }}"> <span class="glyphicon glyphicon-file">Guia Técnica</span> </a> </td>				
	 	<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>		
	</tr>
	<tr>
	 	<td>04</td>
	 	<td>Guia metodológica para elaborar el plan de prevencion y reducción del riesgo de desastrs en los tres niveles de gobierno</td>
	 	<td><a target="_blank" href="{{ asset('/cenepred/docs/IV_GUI-guia-metodologica-PPRRD.pdf') }}"> <span class="glyphicon glyphicon-file"></span>Guia Técnica </a> </td>				
	 	<td> </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/IV_ResolucionJefatural-082-2016.pdf') }}"> <span class="glyphicon glyphicon-file"> </span> Resolución Jefatural N° 082-2016-CENEPRED/J </a></td>
		<td> 15/06/2016 </td>
		<td> </td>
		<td> </td>		
	</tr>
	<tr>
	 	<td>05</td>
	 	<td>Guia metodologica para la elaboracion del plan integral de reconstrucción</td>
	 	<td><a target="_blank" href="{{ asset('/cenepred/docs/V_GUI-guia-plan-integral-reconstruccion.pdf') }}"> <span class="glyphicon glyphicon-file"></span>Guia Técnica </a> </td>				
	 	<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>		
	</tr>
	<tr>
	 	<td>06</td>
	 	<td>Guia metodologica para la incorporación de la Gestión Prospectiva y Correctiva del Riesgo de Desastres en los planes de desarrollo concertado</td>
	 	<td><a target="_blank" href="{{ asset('/cenepred/docs/VI_GUI-guia-metodologica-incorporar-la-gp-y-gc-en-los-pdc.pdf') }}"> <span class="glyphicon glyphicon-file"></span> Guia Técnica Nro 04 </a> </td>				
	 	<td> </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/VI_RJ-ResolucionJefatural-044-2014.pdf') }}"><span class="glyphicon glyphicon-file"></span> Resolucion Jefatural N° 044-2014-CENEPRED/J </a> </td>
		<td> 23/05/2014 </td>
		<td> </td>
		<td> </td>		
	</tr>
	<tr>
	 	<td>07</td>
	 	<td>Lineamientos para la implementación del proceso de reconstrucción</td>
	 	<td> Lineamiento </td>		
	 	<td> <a target="_blank" href="{{ asset('/cenepred/docs/VII_RM-N-147-2016-PCM-Lineamientos-para-la-Implementacion-del-Proceso-de-Reconstruccion.pdf') }}"> <span class="glyphicon glyphicon-file"> </span> Resolucion Ministerial N° 147-2016-PCM </a></td>
		<td> 18/07/2016 </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/VII_RJ-ResolucionJefatural-092-2016-LinGP-GC-PP.pdf') }}"><span class="glyphicon glyphicon-file"></span> Resolucion Jefatural N° 092-2016-CENEPRED/J </a> </td>
		<td> 24/06/2016 </td>
		<td> </td>
		<td> </td>		
	</tr>
	<tr>
	 	<td>08</td>
	 	<td>Lineamientos para incorporar la gestion prospectiva y gestion correctiva en los Planes de Desarrollo Concertado-PDC</td>
	 	<td><a target="_blank" href="{{ asset('/cenepred/docs/VIII_LIN-lineamiento-para-incorporar-GP-GC-en-PDC.pdf') }}"> <span class="glyphicon glyphicon-file"></span>Lineamiento </a></td>
	 	<td> </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/VIII_RJ-ResolucionJefatural-091-2016-GP-GC-PDC.pdf') }}"> <span class="glyphicon glyphicon-file"> </span> Resolucion Jefatural N° 091-2014-CENEPRED/J </a> </td>
		<td> 24/06/2016 </td>
		<td> </td>
		<td> </td>		
		
	</tr>
	<tr>
	 	<td>09</td>
	 	<td>Lineamientos para incorporar la gestion prospectiva y gestion correctiva en los presupuestos participativos-PP</td>
	 	<td><a target="_blank" href="{{ asset('/cenepred/docs/IX_LIN-lineamiento-para-incorporar-GP-GC-PP.pdf') }}"> <span class="glyphicon glyphicon-file"></span>Lineamiento </a></td>
	 	<td> </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/VII_RJ-ResolucionJefatural-092-2016-LinGP-GC-PP.pdf') }}"><span class="glyphicon glyphicon-file"></span> Resolucion Jefatural N° 092-2016-CENEPRED/J </a> </td>
		<td> 24/06/2016 </td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
	 	<td>10</td>
	 	<td>Lineamientos para la constitucion y funcionamiento de los grupos de trabajo de la gestion de riesgo de desastres en los tres niveles de gobierno</td>
	 	<td> Lineamiento </td>		
	 	<td> <a target="_blank" href="{{ asset('/cenepred/docs/X_RM-N-276-2012-PCM-lineamiento-para-la-constitucion-de-los-GTGRD.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Resolución Ministerial N° 276-2012-PCM </a></td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>		
	</tr>
	<tr>
	 	<td>11</td>
	 	<td>Manual para la evaluación de riesgos inducidos por la accion humana</td>
	 	<td> <a target="_blank" href="{{ asset('/cenepred/docs/XI_MAN-manual-evar-induc-accion-humana.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Manual</a></td>
	 	<td> </td>
		<td> </td>
		<td> Resolucion Jefatural N° 115-2014-CENEPRED/J </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred//docs/XI_DIR-directiva-012-2014-evar-inducidos-humana.pdf') }}"> <span class="glyphicon glyphicon-file"></span> Directiva N° 012-2014-CENEPRED/J </a></td>
		<td> </td>		
	</tr>
	<tr>
	 	<td>12</td>
		<td>Manual para la evaluación de riesgos biológicos</td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XII-MAN-manual-evar-biologicos.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Manual</a></td>
	 	<td> </td>
		<td> </td>
		<td> Resolucion Jefatural N° 116-2014-CENEPRED/J </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XII-DIR-directiva-013-2014-evar-biologicos.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Directiva N° 013-2014-CENEPRED/J </a></td>
		<td> </td>
	</tr>
	<tr>
	 	<td>13</td>
		<td>Manual para la evaluación de riesgos originados por fenomenos naturales</td>
		<td>Manual</td>
	 	<td> </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XIII-RJ-ResolucionJefatural-112-2014-manual-evar-fen-nat-ver-ii.pdf') }}"> <span class="glyphicon glyphicon-file"> </span> Resolucion Jefatural N° 112-2014-CENEPRED/J </a></td>
		<td> 31/12/2014 </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XIII-DIR-directiva-009-2014-manual-evar-fen-nat-ver-ii.pdf') }}"> <span class="glyphicon glyphicon-file"> </span> Directiva N° 009-2014-CENEPRED/J </a></td>
		<td> </td>
	</tr>
	<tr>
	 	<td>14</td>
		<td>Lineamientos técnicos del proceso de reducción del riesgo de desastres</td>
		<td>Lineamiento</td>
	 	<td> <a target="_blank" href="{{ asset('/cenepred/docs/XIV-RM-220-2013-PCM-reduccion.pdf') }}"> <span class="glyphicon glyphicon-file"> </span> Resolucion Ministerial N° 120-2013-PCM </a> </td>
		<td>  21/08/2013 </td>
		<td> </td>
		<td> 21/08/2013 </td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
	 	<td>15</td>
		<td>Lineamientos técnicos del proceso de prevención del riesgo de desastres</td>
		<td>Lineamiento</td>
	 	<td> <a target="_blank" href="{{ asset('/cenepred/docs/XV-RM-222-2013-PCM-prevencion.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Resolucion Ministerial N° 222-2013-PCM </a></td>
		<td> 22/08/2013 </td>
		<td> </td>
		<td> 22/08/2013 </td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
	 	<td>16</td>
		<td>Lineamientos para la formulacion y aprobacion del informe de evaluacion del impacto de la emergencia o desastre</td>
		<td><a target="_blank" href="{{ asset('/cenepred/docs/XVI-LIN-lineamientos-EIED-07-06.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Lineamiento</a></td>
	 	<td> </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XVI-RJ-ResolucionJefatural-084-lineamientos-EIED.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Resolucion Jefatural N° 084-2016-CENEPRED/J </a> </td>
		<td> 21/06/2016 </td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
	 	<td>17</td>
		<td>Lineamientos técnicos del proceso de estimación del riesgo de desastres</td>
		<td>Lineamiento</td>
	 	<td> <a target="_blank" href="{{ asset('/cenepred/docs/XVII-RM-334-2012-PCM-estimacion.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Resolucion Ministerial N° 334-2012-PCM </a></td>
		<td> 26/12/2012 </td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
	 	<td>18</td>
		<td>Guia para elaborar el informe preliminar de riesgos</td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XVIII-GUI-guia-informe-preliminar-riesgos.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Guia</a></td>
	 	<td> </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XVIII-RJ-ResolucionJefatural-087-2016.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Resolucion Jefatural N° 087-2016-CENEPRED/J </a></td>
		<td> 21/06/2016 </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XVIII-DIR-directiva-015-informe-preliminar-riesgos.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Directiva N° 015-2016-CENEPRED/J </a></td>
		<td> 21/06/2016 </td>
	</tr>
	<tr>
	 	<td>19</td>
		<td>Guia para la formulacion del informe de evaluación del impacto de emergencias o desastres</td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XIX-GUI-guia-EEIED.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Guia</a></td>
	 	<td> </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XIX-RJ-ResolucionJefatural-077-EEIED.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Resolucion Jefatural N° 077-2016-CENEPRED/J </a></td>
		<td> 03/06/2016 </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XIX-RJ-ResolucionJefatural-077-EEIED.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Directiva N° 009-2016-CENEPRED/J</a> </td>
		<td> 03/06/2016 </td>
	</tr>
	<tr>
	 	<td>20</td>
		<td>Manual para la evaluacion de riesgos originados por fenomeno volcanico</td>
		<td><a target="_blank" href="{{ asset('/cenepred/docs/XX-MAN-manual-evar-vulcanismo.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Manual</a></td>
	 	<td> </td>
		<td> </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XX-RJ-114-2014-manual-evar-vulcanismo.pdf') }}"> <span class="glyphicon glyphicon-file"> </span> Resolucion Jefatural N° 114-2014-CENEPRED/J </a> </td>
		<td> 31/12/2014 </td>
		<td> Directiva N° 011-2014-CENEPRED/J </td>
		<td> 31/12/2014 </td>
	</tr>
	<tr>
	 	<td>21</td>
		<td>Manual para la evaluacion de riesgos originados por inundaciones fluviales</td>
		<td><a target="_blank" href="{{ asset('/cenepred/docs/XXI-RJ-113-2014-manual-evar-inundaciones.pdf') }}"> <span class="glyphicon glyphicon-file"> </span>Manual</a></td>
	 	<td> </td>
		<td> </td>
		<td> Resolucion Jefatural N° 113-2014-CENEPRED/J </td>
		<td> 31/12/2014 </td>
		<td> <a target="_blank" href="{{ asset('/cenepred/docs/XXI-DIR-directiva-010-2014-manual-evar-inundaciones.pdf') }}"> <span class="glyphicon glyphicon-file"> </span> Directiva N° 010-2014-CENEPRED/J </a></td>
		<td> 31/12/2014 </td>
	</tr>			
 </tbody>
 </table>
 <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
 <script>
    $('.datatables').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "language": 
      	{
      		"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",      	   
      	}
    });
</script>
</div>
@endsection
