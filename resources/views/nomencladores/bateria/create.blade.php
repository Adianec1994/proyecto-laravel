<br>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
          <input type="hidden" class="token" value="{{csrf_token()}}">
        <div class="form-group">
          <label>Número</label>
          <input class="form-control" name="numero" placeholder="Numero" id="txt_numero"
                 onkeypress="return Numeros(event)">

        </div>
          <div class="form-group">
              <label>Cantidad Grupos</label>
              <input class="form-control" name="cantidad_grupos" placeholder="Cantidad_Grupos"
                     id="txt_cantidadGrupos" onkeypress="return Numeros(event)">
          </div>
          <div class="form-group">
              <label>Provincia</label>
              <select id="provincia" name="idProvincias" class="form-control" required>
                  <option >Seleccione la Provincia</option>
                  @foreach($provin as $dato)
                      <option value="{{$dato->idProvincias}}">{{$dato->nombre}}</option>
                  @endforeach
              </select>

          </div>
          <div class="form-group">
          <label>Central Eléctrica</label>
          <select id="centrales" name="idCElectricas" class="form-control" required>
              <option >Seleccione la Central Eléctrica</option>
              @foreach($cent as $dato)
                  <option value="{{$dato->idCElectricas}}">{{$dato->nombre}}</option>
              @endforeach
          </select>
            </div>
          <input type="hidden" name="idEmpresas" value="1">

        <button type="button" class="btn btn-primary btn-store btn-xs" id="bateria">Salvar</button>
        <button type="reset" class="btn btn-default btn-cancel btn-xs">Limpiar</button>
        <button type="button" class="btn btn-default btn-volver btn-xs"
                data-dismiss="modal" id="bateria">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
