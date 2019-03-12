<br>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
        <div class="form-group">
          <label>Nombre</label>
          <input class="form-control" name="nombre" placeholder="Nombre" id="txt_nombre"
                 onkeypress="return Letras(event)" >
            <input type="hidden" class="token" value="{{csrf_token()}}">
        </div>
          <div class="form-group">
              <label>Cantidad Centrales</label>
              <input class="form-control" name="cantidad_centrales" placeholder="Cantidad_Centrales"
                     id="txt_cantidadCentrales" onkeypress="return Numeros(event)" >
          </div>
          <div class="form-group">
              <label>Potencia Planificada</label>
              <input class="form-control" name="pot_planificada" placeholder="Potencia_Planificada"
                     id="txt_potPlanificada" onkeypress="return Numeros(event)" >
          </div>
          <input type="hidden" name="idEmpresas" value="1">

        <button type="button" class="btn btn-primary btn-store btn-xs" id="provincia">Salvar</button>
        <button type="reset" class="btn btn-default btn-cancel btn-xs">Limpiar</button>
        <button type="button" class="btn btn-default btn-volver btn-xs"
                data-dismiss="modal" id="provincia">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
