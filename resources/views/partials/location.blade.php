<div class="form-group">
  {{ Form::label('i_coddep', 'Departamento de residencia', ['class' => 'control-label']) }}
  <select class="form-control" name="v_coddep" id="v_coddep">
  </select>
</div>
<div class="form-group">
  {{ Form::label('i_codpro', 'Provincia de residencia', ['class' => 'control-label']) }}
  <select class="form-control" name="v_codpro" id="v_codpro" disabled="true">
  </select>
</div>
<div class="form-group">
  {{ Form::label('i_coddis', 'Distrito de residencia', ['class' => 'control-label']) }}
  <select class="form-control" name="v_coddis" id="v_coddis" disabled="true">
  </select>
</div>

<!-- jQuery 2.2.3 -->
<script src="{{ asset('/plugins/jQuery/jquery-2.2.3.min.js') }}" type="text/javascript"></script>

<!-- page script -->
<script>
    function getDepartamentos(dep) {
      cleanDepartamento();
      $.getJSON('{{ url('/departamentos') }}', function(data) {
        $.each(data, function(k, v) {
          $('#v_coddep').append("<option value=\""+v.v_coddep+"\">"+v.v_desdep+"</option>");
        });
        if (dep !== null) $('#v_coddep').val(dep);
      });
    }

    function getProvincias(dep, pro) {
      cleanProvincia();
      $('#v_codpro').val(0);
      $('#v_coddis').val(0);
      $.getJSON('{{ url('/provincias?departamento=') }}' + dep, function(data) {
        $.each(data, function(k, v) {
          $('#v_codpro').append("<option value=\""+v.v_codpro+"\">"+v.v_despro+"</option>");
        });
        if (pro !== null) $('#v_codpro').val(pro);
      });
      $('#v_codpro').attr('disabled', false);
    }

    function getDistritos(dep, pro, dis) {
      cleanDistrito();
      $('#v_coddis').val(0);
      $.getJSON('{{ url('/distritos?departamento=') }}' + dep
      + '&provincia=' + pro, function(data) {
        $.each(data, function(k, v) {
          $('#v_coddis').append("<option value=\""+v.v_coddis+"\">"+v.v_desdis+"</option>");
        });
        if (dis !== null) $('#v_coddis').val(dis);
      });
      $('#v_coddis').attr('disabled', false);
    }

    function loadLocation(dep, pro, dis) {
      getDepartamentos(dep);
      getProvincias(dep, pro);
      getDistritos(dep, pro, dis);
    }

    function cleanDepartamento() {
      $('#v_coddep').empty();
      $('#v_coddep').append('<option value="0">--Seleccione departamento--</option>');
    }

    function cleanProvincia() {
      $('#v_codpro').empty();
      $('#v_codpro').append('<option value="0">--Seleccione provincia--</option>');
    }

    function cleanDistrito() {
      $('#v_coddis').empty();
      $('#v_coddis').append('<option value="0">--Seleccione distrito--</option>');
    }

    $(document).ready(function() {
      getDepartamentos(null);
    });

    $('#v_coddep').change(function() {
      getProvincias($('#v_coddep').val(), null);
    });

    $('#v_codpro').change(function() {
      getDistritos($('#v_coddep').val(), $('#v_codpro').val(), null);
    });
</script>
