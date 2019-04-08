<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-auto">
            <form role="form" method="POST" id="form" class="update" action="emergencia/{{$emer->idEmergencias}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <h4 class="text-primary">Provincia</h4>
                        <select id="provincia" name="idProvincias" class="form-control">
                            <option value="{{$emer->idProvincias}}">{{$emer->provincia->nombre}}</option>
                            @foreach($provin as $dato)
                                <option value="{{$dato->idProvincias}}">{{$dato->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Empresa Cliente</h4>
                        <input class="form-control" name="cliente"
                               id="txt_cliente" value="{{$emer->cliente}}" onkeypress="return NumerosyLetras(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Estado del Grupo después de la intervención</h4>
                        <input class="form-control" name="estado_grupo"
                               id="txt_estado" value="{{$emer->estado_grupo}}" onkeypress="return Letras(event)">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h4 class="text-primary">Evento</h4>
                        <input class="form-control" name="evento"
                               id="txt_evento" value="{{$emer->evento}}" onkeypress="return NumerosyLetras(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Grupo</h4>
                        <input class="form-control" name="grupo"
                               id="txt_grupo" value="{{$emer->grupo}}" onkeypress="return NumerosyLetras(event)">
                    </div><br>
                    <div class="form-group">
                        <h4 class="text-primary">Informa</h4>
                        <input class="form-control" name="informo"
                               id="txt_informo" value="{{$emer->informo}}" onkeypress="return Letras(event)">
                    </div>

                </div>


                <div class="form-group text-center">
                        <button type="button" class="btn btn-info btn-update btn-modal" data-dismiss="modal"
                                id="emergencia" data-toggle="modal" title="Actualizar datos">Actualizar</button>
                        &nbsp;
                        <button type="reset" class="btn btn-primary btn-modal" data-toggle="modal"
                                title="Recuperar datos originales">Limpiar</button>
                        &nbsp;
                        <button type="button" class="btn btn-danger btn-volver btn-modal" title="Cancelar edición"
                                data-dismiss="modal" data-toggle="modal" id="emergencia">Cancelar</button>
                </div>
                </form>
            </div>
        </div>

</div><!-- /.panel-->

<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
