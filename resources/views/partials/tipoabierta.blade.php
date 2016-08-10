    <div class="col-md-6 col-sm-12 col-sm-offset-3">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Encuesta a registrar/actualizar</h3>
        </div>
        {{ Form::open(array('url' => '')) }}
        {{csrf_field()}}
        <div class="box-body">
          <div class="form-group">
            <label for="i_codpreg">{{ $indicador->v_desind }}</label>
            <input type="text" name="i_codpreg" id="" value=""><br>
          </div>    
        </div>
        <div class="box-footer">
                   {{ Form::submit('Aceptar', ['class' => 'btn btn-primary']) }}
            </div>
        {{ Form::close() }}
      </div>
    </div>
