<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-auto">
            <form role="form" class="create" id="form">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <div class="col-md-6">
                    <div class="form-group">
                        <h4 class="text-primary">Central Eléctrica</h4>
                        <select id="central" name="idCElectricas" class="form-control">
                            <option >Seleccione</option>
                            @foreach($central_electricas as $dato)
                                <option value="{{$dato->idCElectricas}}">{{$dato->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Capacidad Total de Almacenamiento</h4>
                        <input class="form-control" name="capacTotalAlmac" placeholder="Litros"
                               id="txt_capacTotal" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Existencia Total Cierre Día Anterior</h4>
                        <input class="form-control" name="existTotalDiaAnterior" placeholder="Litros"
                               id="txt_existTotal" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Capacidad de vacío</h4>
                        <input class="form-control" name="capacVacio" placeholder="Litros"
                               id="txt_capacVacio" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Plan de Reserva</h4>
                        <input class="form-control" name="planReserva" placeholder="Litros"
                               id="txt_planReserva" onkeypress="return Numeros(event)">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h4 class="text-primary">Fondaje</h4>
                        <input class="form-control" name="fondaje" placeholder="Litros"
                               id="txt_fondaje" onkeypress="return Numeros(event)">
                    </div><br>
                    <div class="form-group">
                        <h4 class="text-primary">Existencia Operativa</h4>
                        <input class="form-control" name="existOperativa" placeholder="Litros"
                               id="txt_existOperativa" onkeypress="return Numeros(event)">
                    </div><br>
                    <div class="form-group">
                        <h4 class="text-primary">Consumo</h4>
                        <input class="form-control" name="consumo" placeholder="Litros"
                               id="txt_consumo" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Suministro CUPET</h4>
                        <input class="form-control" name="suminCupet" placeholder="Litros"
                               id="txt_suministros" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <label for="timepicker1" class="text-primary h4">Cobertura</label>
                        <div class="input-group bootstrap-timepicker">
                            <input id="timepicker1" type="text" class="form-control"
                                   name="coberturaHoras">
                            <span class="input-group-addon">
                                <i class="fa fa-clock-o bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center">
                    <br><br><br>
                    <button type="button" class="btn btn-info btn-store btn-modal"
                            data-dismiss="modal" id="cobertura">Salvar</button>
                    &nbsp;
                    <button type="reset" class="btn btn-primary btn-cancel btn-modal">Limpiar</button>
                    &nbsp;
                    <button type="button" class="btn btn-danger btn-volver btn-modal"
                            data-dismiss="modal" id="cobertura">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>



