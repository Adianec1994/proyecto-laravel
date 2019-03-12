<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" method="POST" id="formUpdate" class="formUpdate">
                <input type="hidden" name="indisp" id="indisp" value="{{ $indisp->idTipoIndisp }}">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" id="_method" value="PUT">
                <div class="form-group">
                    <label>Tipo de Indisponiblidad</label>
                    <input class="form-control" id="txt_tipo" value="{{$indisp->tipo}}"
                    name="tipo" onkeypress="return Letras(event)" required>
                </div>


                <button type="button" class="btn btn-primary btn-update btn-xs" id="indisponible"
                        data-dismiss="modal" data-toggle="modal" data-target="#centralModalWarning"
                        data-value="">Actualizar</button>
                <button type="reset" class="btn btn-default btn-xs">Limpiar</button>
                <button type="button" class="btn btn-default btn-volver btn-xs"
                        data-dismiss="modal" id="indisponible">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
