<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" id="form" class="show">
                <input type="hidden" name="idCoberturas" id="idCoberturas" value="{{$cob->idCoberturas}}">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" id="_method" value="POST">

                <div class="form-group">
                    <h4 class="text-primary">Seleccione la Central Eléctrica</h4>
                    <select id="central" name="idCElectricas" class="form-control">
                        <option >Seleccione</option>
                        @foreach($central as $dato)
                            <option value="{{$dato->idCElectricas}}">{{$dato->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Capacidad Total de Almacenamiento</h4>
                    <input class="form-control" name="capacTotalAlmac"
                           id="txt_capacTotal" value="{{$cob->capacTotalAlmac}}">

                </div>
                <div class="form-group">
                    <h4 class="text-primary">Existencia Total Cierre Día Anterior</h4>
                    <input class="form-control" name="existTotalDiaAnterior"
                           id="txt_existTotal" value="{{$cob->existTotalDiaAnterior}}">
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Capacidad de vacío</h4>
                    <input class="form-control" name="capacVacio"
                           id="txt_capacVacio" value="{{$cob->capacVacio}}">
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Plan de Reserva</h4>
                    <input class="form-control" name="planReserva"
                           id="txt_planReserva" value="{{$cob->planReserva}}">
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Fondaje</h4>
                    <input class="form-control" name="fondaje"
                           id="txt_fondaje" value="{{$cob->fondaje}}">
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Existencia Operativa</h4>
                    <input class="form-control" name="existOperativa"
                           id="txt_existOperativa" value="{{$cob->existOperativa}}">
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Cobertura</h4>
                        <input class="form-control" name="coberturaHoras"
                               value="{{$cob->coberturaHoras}}">

                </div>
                <div class="form-group">
                    <h4 class="text-primary">Consumo</h4>
                    <input class="form-control" name="consumo"
                           id="txt_consumo" value="{{$cob->consumo}}">
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Suministro CUPET</h4>
                    <input class="form-control" name="suminCupet"
                           id="txt_suministros" value="{{$cob->suminCupet}}">
                </div>






                <button type="button" class="btn btn-danger btn-volver btn-xs"
                        data-dismiss="modal" id="cobertura">Regresar</button>
            </form>
        </div>
    </div>

</div><!-- /.panel-->

<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
