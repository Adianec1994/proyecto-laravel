<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Número</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input type="hidden" name="_id" id="_id" value="{{$bat->idBaterias}}">
                    <input class="form-control" id="txt_numero" value="{{$bat->numero}}"
                    name="numero" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <label>Cantidad Grupos</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input class="form-control" id="txt_cantidadGrupos" value="{{$bat->cantidad_grupos}}"
                    name="cantidad_grupos" onkeypress="return Numeros(event)" required>
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



                <button type="button" class="btn btn-primary btn-update btn-xs" id="bateria">Actualizar</button>
                <button type="reset" class="btn btn-default btn-xs">Limpiar</button>
                <button type="button" class="btn btn-default btn-volver btn-xs"
                        data-dismiss="modal" id="bateria">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
