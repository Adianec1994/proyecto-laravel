
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-md-6">
      <form role="form" class="create" id="form">
          <input type="hidden" class="token" value="{{csrf_token()}}">
        <div class="form-group">
          <label>Nombre</label>
          <input class="form-control" name="nombre" placeholder="Nombre" id="txt_nombre"
                 onkeypress="return Letras(event)">

        </div>
          <div class="form-group">
              <label>Cantidad Baterias</label>
              <input class="form-control" name="cantidad_baterias" placeholder="Cantidad de Baterias"
                     id="txt_cantidadBaterias" onkeypress="return Numeros(event)">
          </div>
          <div class="form-group">
              <label>Potencia Indisponible TM</label>
              <input class="form-control" name="potIndispTM" placeholder="Potencia Indisponible por Telemecánica"
                     id="txt_potIndisp" onkeypress="return Numeros(event)">
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
              <label>Tecnología</label>
              <select id="tecnologia" name="idTecnologias" class="form-control" required>
                  <option >Seleccione el tipo de Tecnologia</option>
                  @foreach($tecno as $dato)
                      <option value="{{$dato->idTecnologias}}">{{$dato->tipo}}</option>
                  @endforeach
              </select>
          </div>

          <div class="form-group">
              <label>Cobertura</label>
              <select id="cobertura" name="idCoberturas" class="form-control" required>
                  <option value="1">Seleccione las horas de Cobertura</option>
                  @foreach($cob as $dato)
                      <option value="{{$dato->idCoberturas}}">{{$dato->coberturaHoras}}</option>
                  @endforeach
              </select>
          </div>
          <input type="hidden" name="idEmpresas" value="1">
          <input type="hidden" name="idDatosGenerales" value="1">

          <button type="button" class="btn btn-primary btn-store btn-xs" id="central">Salvar</button>
        <button type="reset" class="btn btn-default btn-cancel btn-xs">Limpiar</button>
        <button type="button" class="btn btn-default btn-volver btn-xs"
                data-dismiss="modal" id="central">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>

<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
