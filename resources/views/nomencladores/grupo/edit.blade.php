<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Número</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input type="hidden" name="_id" id="_id" value="{{$grup->idGrupos}}">
                    <input class="form-control" name="numero" id="txt_numero" value="{{$grup->numero}}"
                           onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <label>Potencia Instalada</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input class="form-control" name="pot_instalada" id="txt_potenciaInstalada"
                           value="{{$grup->pot_instalada}}" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <label>Potencia Disponible</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input class="form-control" name="pot_disponible" id="txt_potDisponible"
                           value="{{$grup->pot_disponible}}" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <label>Potencia Indisponible por Mantenimiento</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input class="form-control" name="potIndispMtto" id="txt_potIndispMtto"
                           value="{{$grup->potIndispMtto}}" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <label>Potencia Indisponible por Averia</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input class="form-control" name="potIndipsAveria" id="txt_potIndispAveria"
                           value="{{$grup->potIndispAveria}}" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <label>Provincia</label>
                    <select id="provincia" name="idProvincias" class="form-control">
                        <option >Seleccione la Provincia</option>
                        @foreach($provin as $dato)
                            <option value="{{$dato->idProvincias}}">{{$dato->nombre}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label>Central Eléctrica</label>
                    <select id="centrales" name="idCElectricas" class="form-control">
                        <option >Seleccione la Central Eléctrica</option>
                        @foreach($cent as $dato)
                            <option value="{{$dato->idCElectricas}}">{{$dato->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Bateria</label>
                    <select id="bateria" name="idBaterias" class="form-control">
                        <option >Seleccione la Bateria</option>
                        @foreach($bat as $dato)
                            <option value="{{$dato->idBaterias}}">{{$dato->numero}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Potencia</label>
                    <select id="potencia" name="idPotencias" class="form-control">
                        <option >Seleccione la Potencia</option>
                        @foreach($pot as $dato)
                            <option value="{{$dato->idPotencias}}">{{$dato->cantidad}}</option>
                        @endforeach
                    </select>
                </div>


                <button type="button" class="btn btn-primary btn-update btn-xs" id="grupo">Actualizar</button>
                <button type="reset" class="btn btn-default btn-xs">Limpiar</button>
                <button type="button" class="btn btn-default btn-volver btn-xs"
                        data-dismiss="modal" id="grupo">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
