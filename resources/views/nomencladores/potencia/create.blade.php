<br>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
          <input type="hidden" class="token" value="{{csrf_token()}}">
        <div class="form-group">
          <h4 class="text-primary">Cantidad</h4>
          <input class="form-control" name="cantidad" placeholder="Cantidad de Potencia"
                 id="txt_cantidad" onkeypress="return Numeros(event)">
        </div>

          <div class="form-group">
              <h4 class="text-primary">Retirado de la Potencia</h4>
              <input type="checkbox" value="1" class="form-control" name="retirado_potencia"
                     id="txt_retirado_potencia">
          </div>

        <button type="button" class="btn btn-info btn-store btn-modal" data-dismiss="modal"
                id="potencia">Salvar</button>
          &nbsp;
        <button type="reset" class="btn btn-primary btn-cancel btn-modal">Limpiar</button>
          &nbsp;
          <button type="button" class="btn btn-danger btn-volver btn-modal"
                data-dismiss="modal" id="potencia">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
