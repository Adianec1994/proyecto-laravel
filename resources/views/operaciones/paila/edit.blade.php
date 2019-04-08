<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-auto">
            <form role="form" method="POST" id="form" class="update" action="paila/{{$pailas->idPailas}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="id-date-picker-1" class="text-primary h4">Fecha</label>
                        <div class="row">
                            <div class="col-xs-8 col-sm-12">
                                <div class="input-group">
                                    <input class="form-control date-picker" id="id-date-picker-1" type="text"
                                           name="fecha" placeholder="Fecha" value="{{$pailas->fecha}}"
                                           data-date-format="yyyy-mm-dd" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar bigger-110"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Combustible Factura</h4>
                        <input class="form-control" name="comb_factura" placeholder="Litros"
                               id="txt_capacVacio" value="{{$pailas->comb_factura}}" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Nombre Chofer</h4>
                        <input class="form-control" name="nombre_Chofer" placeholder="Nombre y Apellidos"
                               id="txt_existOperativa" value="{{$pailas->nombre_Chofer}}" onkeypress="return Letras(event)">
                    </div><br>
                    <div class="form-group">
                        <h4 class="text-primary">Nombre Acompañante</h4>
                        <input class="form-control" name="nombre_Acomp" placeholder="Nombre y Apellidos"
                               id="txt_consumo" value="{{$pailas->nombre_Acomp}}" onkeypress="return Letras(event)">
                    </div>
                    <div class="form-group"><br>
                        <h4 class="text-primary">Nombre Operador</h4>
                        <input class="form-control" name="nombre_Recibe" placeholder="Nombre y Apellidos"
                               id="txt_suministros" value="{{$pailas->nombre_Recibe}}" onkeypress="return Letras(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Central Eléctrica</h4>
                        <select id="central" name="idCElectricas" class="form-control">
                            <option value="{{$pailas->idCElectricas}}">{{$pailas->centralElectrica->nombre}}</option>
                            @foreach($central_electricas as $dato)
                                <option value="{{$dato->idCElectricas}}">{{$dato->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="timepicker1" class="text-primary h4">Hora</label>
                        <div class="input-group bootstrap-timepicker">
                            <input id="timepicker1" type="text" class="form-control" name="hora"
                                   value="{{$pailas->hora}}">
                            <span class="input-group-addon">
                                <i class="fa fa-clock-o bigger-110"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Combustible Medición</h4>
                        <input class="form-control" name="comb_medicion" placeholder="Litros"
                               id="txt_planReserva" value="{{$pailas->comb_medicion}}" onkeypress="return Numeros(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Carnet de Identidad Chofer</h4>
                        <input class="form-control" name="ci_chofer" placeholder="Carnet de Identidad"
                               id="txt_existTotal" value="{{$pailas->ci_chofer}}">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Carnet de Identidad Acompañante</h4>
                        <input class="form-control" name="ci_acompte" placeholder="Carnet de Identidad"
                               id="txt_existTotal" value="{{$pailas->ci_acompte}}">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Carnet de Identidad Operador</h4>
                        <input class="form-control" name="ci_recibe" placeholder="Carnet de Identidad"
                               id="txt_existTotal" value="{{$pailas->ci_recibe}}">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Anotaciones</h4>
                        <textarea class="form-control" id="form-field-8" placeholder="Notas"
                                  name="acciones" onkeypress="return NumerosyLetras(event)">{{$pailas->acciones}}</textarea>
                    </div>
                </div>

                <div class="form-group text-center">
                    <button type="button" class="btn btn-info btn-update btn-modal" data-dismiss="modal"
                            id="paila" data-toggle="modal" title="Actualizar datos">Actualizar</button>
                    &nbsp;
                    <button type="reset" class="btn btn-primary btn-modal" data-toggle="modal"
                            title="Recuperar datos originales">Limpiar</button>
                    &nbsp;
                    <button type="button" class="btn btn-danger btn-volver btn-modal" title="Cancelar edición"
                            data-dismiss="modal" data-toggle="modal" id="paila">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

</div><!-- /.panel-->

<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
