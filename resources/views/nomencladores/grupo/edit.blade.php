<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" method="POST" id="form" class="update" action="grupo/{{$grup->idGrupos}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">
                <div class="form-group">
                    <h4 class="text-primary">Provincia</h4>
                    <select id="provincia" name="idProvincias" class="form-control">
                        <option value="{{$grup->bateria->centralElectrica->idProvincias}}">
                            {{$grup->bateria->centralElectrica->provincia->nombre}}</option>
                        @foreach($provin as $dato)
                            <option value="{{$dato->idProvincias}}">{{$dato->nombre}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <h4 class="text-primary">Central Eléctrica</h4>
                    <select id="centrales" name="idCElectricas" class="form-control">
                        <option value="{{$grup->bateria->idCElectricas}}">{{$grup->bateria->centralElectrica->nombre}}</option>
                        @foreach($cent as $dato)
                            <option value="{{$dato->idCElectricas}}">{{$dato->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Bateria</h4>
                    <select id="bateria" name="idBaterias" class="form-control">
                        <option value="{{$grup->idBaterias}}">{{$grup->bateria->numero}}</option>
                        @foreach($bat as $dato)
                            <option value="{{$dato->idBaterias}}">{{$dato->numero}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Estado</h4>
                    <select id="estado" name="idEstados" class="form-control">
                        <option value="{{$grup->idEstados}}">{{$grup->estado->tipo}}</option>
                        @foreach($est as $dato)
                            <option value="{{$dato->idEstados}}">{{$dato->tipo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Número</h4>
                    <input class="form-control" name="numero" id="txt_numero" value="{{$grup->numero}}"
                           onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Potencia Instalada</h4>
                    <input class="form-control" name="pot_instalada" id="txt_potenciaInstalada"
                           value="{{$grup->pot_instalada}}" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Potencia Disponible</h4>
                    <input class="form-control" name="pot_disponible" id="txt_potDisponible"
                           value="{{$grup->pot_disponible}}" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Potencia Indisponible por Mantenimiento</h4>
                    <input class="form-control" name="potIndispMtto" id="txt_potIndispMtto"
                           value="{{$grup->potIndispMtto}}" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Potencia Indisponible por Averia</h4>
                    <input class="form-control" name="potIndispAveria" id="txt_potIndispAveria"
                           value="{{$grup->potIndispAveria}}" onkeypress="return Numeros(event)" required>
                </div>


                <button type="button" class="btn btn-info btn-update btn-xs" data-dismiss="modal"
                        id="grupo">Actualizar</button>
                &nbsp;
                <button type="reset" class="btn btn-primary btn-xs">Limpiar</button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-volver btn-xs"
                        data-dismiss="modal" id="grupo">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/validaciones.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>
