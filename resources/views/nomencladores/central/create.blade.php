
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
          <h4 class="text-primary">Nombre</h4>
          <input class="form-control" name="nombre" placeholder="Nombre" id="txt_nombre"
                 onkeypress="return NumerosyLetras(event)">

        </div>
          <div class="form-group">
              <h4 class="text-primary">Cantidad Baterias</h4>
              <input class="form-control" name="cantidad_baterias" placeholder="Cantidad de Baterias"
                     id="txt_cantidadBaterias" onkeypress="return Numeros(event)">
          </div>
          <div class="form-group">
              <h4 class="text-primary">Potencia Indisponible TM</h4>
              <input class="form-control" name="potIndispTM" placeholder="Potencia Indisponible por Telemecánica"
                     id="txt_potIndisp" onkeypress="return Numeros(event)">
          </div>

          <div class="form-group">
              <h4 class="text-primary">Tecnología</h4>
              <select id="tecnologia" name="idTecnologias" class="form-control" required>
                  <option >Seleccione el tipo de Tecnologia</option>
                  @foreach($tecno as $dato)
                      <option value="{{$dato->idTecnologias}}">{{$dato->tipo}}</option>
                  @endforeach
              </select>
          </div>

          <input type="hidden" name="idEmpresas" value="1">
          <input type="hidden" name="idDatosGenerales" value="1">

          <button type="button" class="btn btn-info btn-store btn-modal" id="central"
                  data-toggle="modal" data-target="#myModal">Salvar</button>
          &nbsp;
        <button type="reset" class="btn btn-primary btn-cancel btn-modal">Limpiar</button>
          &nbsp;
          <button type="button" class="btn btn-danger btn-volver btn-modal"
                data-dismiss="modal" id="central">Cancelar</button>
          <br><br><br>
      </form>
    </div>
  </div>
</div>

<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
