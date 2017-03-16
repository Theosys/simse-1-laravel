@extends('cenepred.base')

@section('contenido')

<link title="timeline-styles" rel="stylesheet" href="{{ asset('/plugins/timeline/css/timeline.css') }}">
<script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>

<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.18.1/vis.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.18.1/vis.min.js"></script> -->
<h5 class="btn er">Escenario de Riesgos Ante la Temporada de Lluvias 2016 - 2017</h5>

<div id="visualization"></div>
<div id='timeline-embed' style="width: 100%; height: 600px"></div>

<script type="text/javascript">
  // DOM element where the Timeline will be attached
  /*var container = document.getElementById('visualization');

  // Create a DataSet (allows two way data-binding)
  var items = new vis.DataSet([    
    {id: 1, content: 'Escenario de riesgo  001', start: '2017-01-19', end: '2017-01-24'},    
    {id: 2, content: 'Escenario de riesgo  002', start: '2017-01-24', end: '2017-01-28'},    
    {id: 3, content: 'Escenario de riesgo  003', start: '2017-01-30', end: '2017-02-06'},    
    {id: 4, content: 'Escenario de riesgo  004', start: '2017-02-04', end: '2017-02-09'},
    {id: 5, content: 'Escenario de riesgo  005', start: '2017-02-04', end: '2017-02-11'},
    {id: 6, content: 'Escenario de riesgo  006', start: '2017-02-07', end: '2017-02-12'},
    {id: 7, content: 'Escenario de riesgo  007', start: '2017-02-13', end: '2017-02-16'},
    {id: 8, content: '<p style="padding: 15px;background: green;color: #fff;">Escenario de riesgo  008</p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62424.568532709156!2d-77.0788687166218!3d-12.07544543394486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8db1e539667%3A0x4f45538aa07bda29!2sDistrito+de+Lima%2C+Per%C3%BA!5e0!3m2!1ses!2ses!4v1487612406213" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', start: '2017-02-16', end: '2017-02-18'},
    {id: 9, content: 'Escenario de riesgo  009', start: '2017-02-17', end: '2017-02-21'}
  ]);

  // Configuration for the Timeline
  var options = {};

  // Create a Timeline
  var timeline = new vis.Timeline(container, items, options);*/
  //var timeline_json = make_the_json('http://dimse.cenepred.gob.pe/json/tm_example.json');
  var options = {
    hash_bookmark: false,    
    start_at_end : true,//empezar en el ultimo 
    language: 'es',
    hash_bookmark: true
  }

  timeline = new TL.Timeline('timeline-embed',
        'https://docs.google.com/spreadsheets/d/1pcVvu9BduarvxyXbb-2b2QTEDc4vATK0ZFmhUokjJRk/pubhtml',options);
</script>
@endsection