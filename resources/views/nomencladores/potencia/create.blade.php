<br>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
          <input type="hidden" class="token" value="{{csrf_token()}}">
        <div class="form-group">
          <label>Cantidad</label>
          <input class="form-control" name="cantidad" placeholder="Cantidad de Potencia"
                 id="txt_cantidad" onkeypress="return Numeros(event)">
        </div>

          <div class="form-group">
              <label>Retirado de la Potencia</label>
              <input class="form-control" name="retirado_potencia" placeholder="Si o No"
                     id="txt_retirado_potencia" onkeypress="return Letras(event)">
          </div>

        <button type="button" class="btn btn-primary btn-store btn-xs" id="potencia">Salvar</button>
        <button type="reset" class="btn btn-default btn-cancel btn-xs">Limpiar</button>
        <button type="button" class="btn btn-default btn-volver btn-xs"
                data-dismiss="modal" id="potencia">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
