<div class="form-group">
  {{ Form::label('i_coddep', 'Departamento de residencia', ['class' => 'control-label']) }}
  <select class="form-control" name="v_coddep" id="v_coddep">
  </select>
</div>
<div class="form-group">
  {{ Form::label('i_codpro', 'Provincia de residencia', ['class' => 'control-label']) }}
  <select class="form-control" name="v_codpro" id="v_codpro">
  </select>
</div>
<div class="form-group">
  {{ Form::label('i_coddis', 'Distrito de residencia', ['class' => 'control-label']) }}
  <select class="form-control" name="v_codpro" id="v_coddis">
  </select>
</div>

<!-- jQuery 2.2.3 -->
<script src="{{ asset('/plugins/jQuery/jquery-2.2.3.min.js') }}" type="text/javascript"></script>

<!-- page script -->
<script>
    $(document).ready(function() {
      $.getJSON('{{ url('/departamentos') }}', function(data) {
        $.each(data, function(k, v) {
          $('#v_coddep').append("<option value=\""+v.v_coddep+"\">"+v.v_desdep+"</option>");
        });
      });
    });

    $('#v_coddep').change(function() {
      $('#v_codpro').empty();
      $('#v_coddis').empty();
      $.getJSON('{{ url('/provincias?departamento=') }}' + $('#v_coddep').val(), function(data) {
        $.each(data, function(k, v) {
          $('#v_codpro').append("<option value=\""+v.v_codpro+"\">"+v.v_despro+"</option>");
        });
      });
    });

    $('#v_codpro').change(function() {
      $('#v_coddis').empty();
      $.getJSON('{{ url('/distritos?departamento=') }}' + $('#v_coddep').val()
      + '&provincia=' + $('#v_codpro').val(), function(data) {
        $.each(data, function(k, v) {
          $('#v_coddis').append("<option value=\""+v.v_coddis+"\">"+v.v_desdis+"</option>");
        });
      });
    });
</script>
