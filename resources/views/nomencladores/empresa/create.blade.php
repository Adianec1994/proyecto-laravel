<br>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
          <input type="hidden" class="token" value="{{csrf_token()}}">
        <div class="form-group">
          <label>Nombre</label>
          <input class="form-control" name="nombre" placeholder="Nombre" id="txt_nombre" onkeypress="return Letras(event)">
        </div>
          <div class="form-group">
              <label>Cantidad Provincias</label>
              <input class="form-control" name="cantidad_provincias" placeholder="Cantidad_Provincias"
                     id="txt_cantidadProvincias" onkeypress="return Numeros(event)">
          </div>

          <button type="button" class="btn btn-primary btn-store btn-xs" id="empresa">Salvar</button>
        <button type="reset" class="btn btn-default btn-cancel btn-xs">Limpiar</button>
        <button type="button" class="btn btn-default btn-volver btn-xs"
                data-dismiss="modal" id="empresa">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
