<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" id="form" class="create">
                <input type="hidden" name="idTipoMtto" id="idTipoMtto" value="{{$mtto->idTipoMtto}}">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" id="_method" value="PUT">

                <div class="form-group">
                    <label>Tipo de Mantenimiento</label>
                    <input class="form-control" name="tipo" placeholder="Tipo de Mantenimiento en Horas"
                           id="txt_tipo" value="{{$mtto->tipo}}" onkeypress="return Numeros(event)">
                </div>



                    <button type="button" class="btn btn-primary btn-store btn-xs" id="mantenimiento">Actualizar</button>
                    <button type="reset" class="btn btn-default btn-xs">Limpiar</button>
                    <button type="button" class="btn btn-default btn-volver btn-xs"
                            data-dismiss="modal" id="mantenimiento">Cancelar</button>
                </form>
            </div>
        </div>

</div><!-- /.panel-->

<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
