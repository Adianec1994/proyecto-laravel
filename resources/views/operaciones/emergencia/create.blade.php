<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-auto">
            <form role="form" class="create" id="form">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <div class="col-md-6">
                    <div class="form-group">
                        <h4 class="text-primary">Provincia</h4>
                        <select id="provincia" name="idProvincias" class="form-control">
                            <option >Seleccione</option>
                            @foreach($provincias as $dato)
                                <option value="{{$dato->idProvincias}}">{{$dato->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Empresa Cliente</h4>
                        <input class="form-control" name="cliente" placeholder="Nombre de la Empresa"
                               id="txt_cliente" onkeypress="return NumerosyLetras(event)">
                    </div>
                    <div class="form-group">
                        <h4 class="text-primary">Estado del Grupo después de la intervención</h4>
                        <input class="form-control" name="estado_grupo" placeholder="Estado del Grupo"
                               id="txt_estado" onkeypress="return Letras(event)">
                    </div>

                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h4 class="text-primary">Evento</h4>
                            <input class="form-control" name="evento" placeholder="Datos del Evento"
                                   id="txt_evento" onkeypress="return NumerosyLetras(event)">
                        </div>
                        <div class="form-group">
                            <h4 class="text-primary">Grupo</h4>
                            <input class="form-control" name="grupo" placeholder="Datos del Grupo"
                                   id="txt_grupo" onkeypress="return NumerosyLetras(event)">
                        </div><br>
                        <div class="form-group">
                        <h4 class="text-primary">Informa</h4>
                        <input class="form-control" name="informo" placeholder="Nombre y Apellidos"
                               id="txt_informo" onkeypress="return Letras(event)">
                    </div>

                </div>

                <div class="form-group text-center">
                    <br><br><br>
                    <button type="button" class="btn btn-info btn-store btn-modal"
                            data-dismiss="modal" id="emergencia">Salvar</button>
                    &nbsp;
                    <button type="reset" class="btn btn-primary btn-cancel btn-modal">Limpiar</button>
                    &nbsp;
                    <button type="button" class="btn btn-danger btn-volver btn-modal"
                            data-dismiss="modal" id="emergencia">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>



