<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-auto">
            <form role="form" method="POST" id="form" class="update" action="cobertura/{{$cob->idCoberturas}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <h4 class="text-primary">Central Eléctrica</h4>
                        <select id="central" name="idCElectricas" class="form-control">
                            <option value="{{$cob->idCElectricas}}">{{$cob->centralElectrica->nombre}}</option>
                            @foreach($cent as $dato)
                                <option value="{{$dato->idCElectricas}}">{{$dato->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Capacidad Total Almacenamiento(Lts)</h4>
                        <input class="form-control" name="capacTotalAlmac"
                               id="txt_valor1" value="{{$cob->capacTotalAlmac}}" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Existencia Total Cierre Día Anterior (Lts)</h4>
                        <input class="form-control" name="existTotalDiaAnterior"
                               id="txt_valor2" value="{{$cob->existTotalDiaAnterior}}" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Capacidad de vacío (Lts)</h4>
                        <input class="form-control" name="capacVacio"
                               id="txt_valor3" value="{{$cob->capacVacio}}" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Plan de Reserva (Lts)</h4>
                        <input class="form-control" name="planReserva"
                               id="txt_valor4" value="{{$cob->planReserva}}" onkeypress="return Numeros(event)">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <h4 class="text-primary">Fondaje (Lts)</h4>
                        <input class="form-control" name="fondaje"
                               id="txt_valor5" value="{{$cob->fondaje}}" onkeypress="return Numeros(event)">
                    </div><br>
                    <div class="form-group">
                        <h4 class="text-primary">Existencia Operativa (Lts)</h4>
                        <input class="form-control" name="existOperativa"
                               id="txt_valor5" value="{{$cob->existOperativa}}" onkeypress="return Numeros(event)">
                    </div><br>
                    <div class="form-group">
                        <h4 class="text-primary">Consumo (Lts)</h4>
                        <input class="form-control" name="consumo"
                               id="txt_valor5" value="{{$cob->consumo}}" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Suministro CUPET (Lts)</h4>
                        <input class="form-control" name="suminCupet"
                               id="txt_valor5" value="{{$cob->suminCupet}}" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <label for="timepicker1" class="text-primary h4">Cobertura (Hrs)</label>
                        <div class="input-group bootstrap-timepicker">
                            <input id="timepicker1" type="text" class="form-control"
                                   name="coberturaHoras" value="{{$cob->coberturaHoras}}">
                            <span class="input-group-addon">
                            <i class="fa fa-clock-o bigger-110"></i>
                        </span>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center">
                        <button type="button" class="btn btn-info btn-update btn-modal" data-dismiss="modal"
                                id="cobertura" data-toggle="modal" title="Actualizar datos">Actualizar</button>
                        &nbsp;
                        <button type="reset" class="btn btn-primary btn-modal" data-toggle="modal"
                                title="Recuperar datos originales">Limpiar</button>
                        &nbsp;
                        <button type="button" class="btn btn-danger btn-volver btn-modal" title="Cancelar edición"
                                data-dismiss="modal" data-toggle="modal" id="cobertura">Cancelar</button>
                </div>
                </form>
            </div>
        </div>

</div><!-- /.panel-->

<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
