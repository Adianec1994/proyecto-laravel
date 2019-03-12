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
              <label>Potencia Instalada</label>
              <input class="form-control" name="pot_instalada" placeholder="Potencia_Instalada"
                     id="txt_potenciaInstalada" onkeypress="return Numeros(event)">
          </div>
          <div class="form-group">
              <label>Potencia Disponible</label>
              <input class="form-control" name="pot_disponible" placeholder="Potencia_Disponible"
                     id="txt_potDisponible" onkeypress="return Numeros(event)">
          </div>
          <div class="form-group">
              <label>Potencia Indisponible por Mantenimiento</label>
              <input class="form-control" name="potIndispMtto" placeholder="Potencia_Indisp_Mtto"
                     id="txt_potIndispMtto" onkeypress="return Numeros(event)">
          </div>
          <div class="form-group">
              <label>Potencia Indisponible por Averia</label>
              <input class="form-control" name="potIndispAveria" placeholder="Potencia_Indisp_Averia"
                     id="txt_potIndispAveria" onkeypress="return Numeros(event)">
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
          <div class="form-group">
              <label>Bateria</label>
              <select id="bateria" name="idBaterias" class="form-control" required>
                  <option >Seleccione la Bateria</option>
                  @foreach($bat as $dato)
                      <option value="{{$dato->idBaterias}}">{{$dato->numero}}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label>Potencia</label>
              <select id="potencia" name="idPotencias" class="form-control" required>
                  <option >Seleccione la Potencia</option>
                  @foreach($pot as $dato)
                      <option value="{{$dato->idPotencias}}">{{$dato->cantidad}}</option>
                  @endforeach
              </select>
          </div>
          <input type="hidden" name="idEmpresas" value="1">

        <button type="button" class="btn btn-primary btn-store btn-xs" id="grupo">Salvar</button>
        <button type="reset" class="btn btn-default btn-cancel btn-xs">Limpiar</button>
        <button type="button" class="btn btn-default btn-volver btn-xs"
                data-dismiss="modal" id="grupo">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
