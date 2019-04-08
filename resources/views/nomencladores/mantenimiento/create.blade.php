<br>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
          <input type="hidden" class="token" value="{{csrf_token()}}">
          <input type="hidden" name="_method" id="_method" value="POST">

          <div class="form-group">
              <h4 class="text-primary">Tipo de Mantenimiento</h4>
          <input class="form-control" name="tipo" placeholder="Tipo de Mantenimiento en Horas"
                 id="txt_tipo" onkeypress="return Numeros(event)">
          </div>

        <button type="button" class="btn btn-info btn-store btn-modal" data-dismiss="modal" id="mantenimiento">Salvar</button>
          &nbsp;
          <button type="reset" class="btn btn-primary btn-cancel btn-modal">Limpiar</button>
          &nbsp;
          <button type="button" class="btn btn-danger btn-volver btn-modal"
                data-dismiss="modal" id="mantenimiento">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
