<br>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
          <input type="hidden" class="token" value="{{csrf_token()}}">
          <div class="form-group">
              <h4 class="text-primary">Tipo de Estado</h4>
              <input class="form-control" name="tipo" placeholder="Tipo de Estado"
                     id="txt_tipo" onkeypress="return Letras(event)">
          </div>
          <div class="form-group">
              <h4 class="text-primary">Potencia</h4>
              <input class="form-control" name="potencia" placeholder="Potencia"
                     id="txt_potencia" onkeypress="return Numeros(event)">
          </div>

        <button type="button" class="btn btn-info btn-store btn-modal" data-dismiss="modal"
                id="estado">Salvar</button>
          &nbsp;
        <button type="reset" class="btn btn-primary btn-cancel btn-modal">Limpiar</button>
          &nbsp;
          <button type="button" class="btn btn-danger btn-volver btn-modal"
                data-dismiss="modal" id="estado">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
