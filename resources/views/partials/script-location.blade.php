<script>
    var selected = '';
    function getDepartamentos(dep) {

      cleanDepartamento();
      var v_coddep;
      $.getJSON("{{ url('/api/departamentos') }}", function(data) {
        $.each(data, function(k, v) {
          v_coddep = ('00'+v.v_coddep).slice(-2);
          selected = (v_coddep==dep)?'selected':'';
          $('#v_coddep').append("<option value=\""+v_coddep+"\" "+selected+">"+v.v_desdep+"</option>");
        });
        if (dep !== null) $('#v_coddep').val(dep);
      });
    }

    function getProvincias(dep, pro) {
      cleanProvincia();
      $('#v_codpro').val(0);
      $('#v_coddis').val(0);
      var v_codpro;
      $.getJSON('{{ url('/api/provincias?departamento=') }}' + dep, function(data) {
        $.each(data, function(k, v) {
          v_codpro = ('00'+v.v_codpro).slice(-2);
          selected = (v_codpro==pro)?'selected':'';
          $('#v_codpro').append("<option value=\""+v_codpro+"\" "+selected+">"+v.v_despro+"</option>");
        });
        if (pro !== null) $('#v_codpro').val(pro);
      });
      $('#v_codpro').attr('disabled', false);
    }

    function getDistritos(dep, pro, dis) {
      cleanDistrito();
      $('#v_coddis').val(0);
      var v_coddis;
      $.getJSON('{{ url('/api/distritos?departamento=') }}' + dep
      + '&provincia=' + pro, function(data) {
        $.each(data, function(k, v) {
          v_coddis = ('00'+v.v_coddis).slice(-2);
          selected = (v_coddis==dis)?'selected':'';
          $('#v_coddis').append("<option value=\""+v_coddis+"\" "+selected+">"+v.v_desdis+"</option>");
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

    $('#v_coddep').change(function() {
      getProvincias($('#v_coddep').val(), null);
    });
    
    $('#v_codpro').change(function() {
      getDistritos($('#v_coddep').val(), $('#v_codpro').val(), null);
    });
</script>