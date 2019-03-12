<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="formCreate" id="formCreate">
        <div class="form-group">
          <label>Nombre</label>
          <input class="form-control" placeholder="Nombre" id="txt_nombre">
        </div>
        <div class="form-group">
          <label>Codigo</label>
            <input type="hidden" class="token" value="{{csrf_token()}}">
          <input type="text" class="form-control" placeholder="Codigo" id="txt_codigo">
        </div>
        <button type="button" class="btn btn-primary btn-store btn-xs" id="categoria">Salvar</button>
        <button type="reset" class="btn btn-default btn-cancel btn-xs">Cancelar</button>
        <button type="button" class="btn btn-default btn-volver btn-xs" id="categoria">Volver</button>
      </form>
      <div id="msg" class="alert alert-warning alert-dismissible" role="alert" style="display: none"></div>
    </div>
  </div>
</div>