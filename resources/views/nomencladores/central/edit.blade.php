<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" class="formEdit">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input type="hidden" name="_id" id="_id" value="{{$cent->idCElectricas}}">
                    <input class="form-control"  id="txt_nombre" value="{{$cent->nombre}}"
                    name="nombre" onkeypress="return Letras(event)" required>
                </div>

                <div class="form-group">
                    <label>Cantidad Baterias</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input class="form-control" id="txt_cantidadBaterias" value="{{$cent->cantidad_baterias}}"
                    name="cantidad_baterias" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <label>Potencia Indisponible TM</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input class="form-control" id="txt_potIndisp" value="{{$cent->potIndispTM}}"
                    name="potIndispTM" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <label>Provincia</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <select id="provincia" name="idProvincias" class="form-control">
                        <option >Seleccione la Provincia</option>
                        @foreach($provin as $cent)
                            <option value="{{$cent->idProvincias}}">{{$cent->nombre}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label>Tecnología</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <select id="tecnologia" name="idTecnologias" class="form-control">
                        <option >Seleccione el tipo de Tecnologia</option>
                        @foreach($tecno as $dato)
                            <option value="{{$dato->idTecnologias}}">{{$dato->tipo}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Cobertura</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <select id="cobertura" name="idCoberturas" class="form-control">
                        <option value="1">Seleccione las horas de Cobertura</option>
                        @foreach($cob as $dato)
                            <option value="{{$dato->idCoberturas}}">{{$dato->coberturaHoras}}</option>
                        @endforeach
                    </select>
                </div>




                <button type="button" class="btn btn-primary btn-update btn-xs" id="central">Actualizar</button>
                <button type="reset" class="btn btn-default btn-xs">Limpiar</button>
                <button type="button" class="btn btn-default btn-volver btn-xs"
                        data-dismiss="modal" id="central">Cancelar</button>
            </form>
        </div>

    </div>
</div><!-- /.panel-->
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
