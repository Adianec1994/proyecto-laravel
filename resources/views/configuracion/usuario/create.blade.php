<br>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
          <input type="hidden" class="token" value="{{csrf_token()}}">

          <div class="form-group">
              <h4 class="text-primary">Provincia</h4>
              <select id="provincia" name="idProvincias" class="form-control" required>
                  <option >Seleccione la Provincia</option>
                  @foreach($provin as $dato)
                      <option value="{{$dato->idProvincias}}">{{$dato->nombre}}</option>
                  @endforeach
              </select>

          </div>
          <div class="form-group">
              <h4 class="text-primary">Central Eléctrica</h4>
              <select id="centrales" name="idCElectricas" class="form-control" required>
                  <option >Seleccione la Central Eléctrica</option>
                  @foreach($cent as $dato)
                      <option value="{{$dato->idCElectricas}}">{{$dato->nombre}}</option>
                  @endforeach
              </select>
          </div>
        <div class="form-group">
          <h4 class="text-primary">Número</h4>
          <input class="form-control" name="numero" placeholder="Numero" id="txt_numero"
                 onkeypress="return Numeros(event)">

        </div>
          <div class="form-group">
              <h4 class="text-primary">Cantidad Grupos</h4>
              <input class="form-control" name="cantidad_grupos" placeholder="Cantidad_Grupos"
                     id="txt_cantidadGrupos" onkeypress="return Numeros(event)">
          </div>

          <input type="hidden" name="idEmpresas" value="1">

        <button type="button" class="btn btn-info btn-store btn-modal" data-dismiss="modal"
                id="bateria">Salvar</button>
          &nbsp;
        <button type="reset" class="btn btn-primary btn-cancel btn-modal">Limpiar</button>
          &nbsp;
          <button type="button" class="btn btn-danger btn-volver btn-modal"
                data-dismiss="modal" id="bateria">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
