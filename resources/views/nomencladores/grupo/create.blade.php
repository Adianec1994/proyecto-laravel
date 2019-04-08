<br>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
          <input type="hidden" class="token" value="{{csrf_token()}}">
          <div class="form-group">
              <h4 class="text-primary">Bateria</h4>
              <select id="bateria" name="idBaterias" class="form-control" required>
                  <option >Seleccione la Bateria</option>
                  @foreach($bat as $dato)
                      <option value="{{$dato->idBaterias}}">{{$dato->numero}}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <h4 class="text-primary">Estado</h4>
              <select id="estado" name="idEstados" class="form-control" required>
                  <option >Seleccione el Estado</option>
                  @foreach($est as $dato)
                      <option value="{{$dato->idEstados}}">{{$dato->tipo}}</option>
                  @endforeach
              </select>
          </div>

        <div class="form-group">
          <h4 class="text-primary">Número</h4>
          <input class="form-control" name="numero" placeholder="Numero" id="txt_numero"
                 onkeypress="return Numeros(event)">
        </div>
          <div class="form-group">
              <h4 class="text-primary">Potencia Instalada</h4>
              <input class="form-control" name="pot_instalada" placeholder="Potencia_Instalada"
                     id="txt_potenciaInstalada" onkeypress="return Numeros(event)">
          </div>
          <div class="form-group">
              <h4 class="text-primary">Potencia Disponible</h4>
              <input class="form-control" name="pot_disponible" placeholder="Potencia_Disponible"
                     id="txt_potDisponible" onkeypress="return Numeros(event)">
          </div>
          <div class="form-group">
              <h4 class="text-primary">Potencia Indisponible por Mantenimiento</h4>
              <input class="form-control" name="potIndispMtto" placeholder="Potencia_Indisp_Mtto"
                     id="txt_potIndispMtto" onkeypress="return Numeros(event)">
          </div>
          <div class="form-group">
              <h4 class="text-primary">Potencia Indisponible por Averia</h4>
              <input class="form-control" name="potIndispAveria" placeholder="Potencia_Indisp_Averia"
                     id="txt_potIndispAveria" onkeypress="return Numeros(event)">
          </div>

        <button type="button" class="btn btn-info btn-store btn-modal" data-dismiss="modal" id="grupo">Salvar</button>
          &nbsp;
          <button type="reset" class="btn btn-primary btn-cancel btn-modal">Limpiar</button>
          &nbsp;
          <button type="button" class="btn btn-danger btn-volver btn-modal"
                data-dismiss="modal" id="grupo">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
