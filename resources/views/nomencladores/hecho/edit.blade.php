<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Tipo de Hecho</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input type="hidden" name="_id" id="_id" value="{{$hec->idtipoHechos}}">
                    <input class="form-control" id="txt_tipo" value="{{$hec->tipo}}"
                           name="tipo" onkeypress="return Letras(event)" required>
                </div>


                <button type="button" class="btn btn-primary btn-update btn-xs" id="hecho">Actualizar</button>
                <button type="reset" class="btn btn-default btn-xs">Limpiar</button>
                <button type="button" class="btn btn-default btn-volver btn-xs"
                        data-dismiss="modal" id="hecho">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
