<br>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
          <input type="hidden" class="token" value="{{csrf_token()}}">
          <input type="hidden" name="_method" id="_method" value="POST">

          <div class="form-group">
          <label>Tipo de Mantenimiento</label>
          <input class="form-control" name="tipo" placeholder="Tipo de Mantenimiento en Horas"
                 id="txt_tipo" onkeypress="return Numeros(event)">
          </div>

        <button type="button" class="btn btn-primary btn-store btn-xs" id="mantenimiento">Salvar</button>
        <button type="reset" class="btn btn-default btn-cancel btn-xs">Limpiar</button>
        <button type="button" class="btn btn-default btn-volver btn-xs"
                data-dismiss="modal" id="mantenimiento">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
