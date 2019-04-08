<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-auto">
            <form role="form" class="create" id="form">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <div class="col-md-6"><br>
                    <div class="form-group">
                        <h4 class="text-primary">Grupo Electrógeno</h4>
                        <select id="grupo" name="idGrupos" class="form-control">
                            <option>Seleccione</option>
                            @foreach($grupo as $dato)
                                <option value="{{$dato->idGrupos}}">{{$dato->numero}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Reporta</h4>
                        <input class="form-control" name="nombre_informa" placeholder="Nombre de quien reporta el trabajo"
                               id="txt_reporta" onkeypress="return Letras(event)">
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="hEntradaAM" required>
                        <span class="bar"></span>
                        <label class="text-primary"><span class="fa fa-clock-o"></span> Hora de Entrada AM</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="hEntradaM" required>
                        <span class="bar"></span>
                        <label class="text-primary"><span class="fa fa-clock-o"></span> Hora de Entrada M</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="hEntradaPM" required>
                        <span class="bar"></span>
                        <label class="text-primary"><span class="fa fa-clock-o"></span> Hora de Entrada PM</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="id-date-picker-1" class="text-primary h4">Fecha</label>
                        <div class="row">
                            <div class="col-xs-8 col-sm-12">
                                <div class="input-group">
                                    <input class="form-control date-picker" id="id-date-picker-1" type="text"
                                           name="fecha" placeholder="Fecha" data-date-format="yyyy-mm-dd" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar bigger-110"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="timepicker1" class="text-primary h4">Tiempo de Operación</label>
                        <div class="input-group bootstrap-timepicker">
                            <input id="timepicker1" type="text" class="form-control" name="tiempoOperacion">
                            <span class="input-group-addon">
                                <i class="fa fa-clock-o bigger-110"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="hSalidaAM" required>
                        <span class="bar"></span>
                        <label class="text-primary"><span class="fa fa-clock-o"></span> Hora de Salida AM</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="hSalidaM" required>
                        <span class="bar"></span>
                        <label class="text-primary"><span class="fa fa-clock-o"></span> Hora de Salida M</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="hSalidaPM" required>
                        <span class="bar"></span>
                        <label class="text-primary"><span class="fa fa-clock-o"></span> Hora de Salida PM</label>
                    </div>


                </div>

                <div class="form-group text-center">
                    <br><br><br>
                    <button type="button" class="btn btn-info btn-store btn-modal"
                            data-dismiss="modal" id="generacion">Salvar</button>
                    &nbsp;
                    <button type="reset" class="btn btn-primary btn-cancel btn-modal">Limpiar</button>
                    &nbsp;
                    <button type="button" class="btn btn-danger btn-volver btn-modal"
                            data-dismiss="modal" id="generacion">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>



