<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input type="hidden" name="_id" id="_id" value="{{$prov->idProvincias}}">
                    <input class="form-control" name="nombre" id="txt_nombre" value="{{$prov->nombre}}" onkeypress="return Letras(event)" required>
                </div>

                <div class="form-group">
                    <label>Cantidad Centrales</label>
                    <input class="form-control" name="cantidad_centrales" id="txt_cantidad" value="{{$prov->cantidad_centrales}}" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <label>Potencia Planificada</label>
                    <input class="form-control" name="pot_planificada" id="txt_pot" value="{{$prov->pot_planificada}}" onkeypress="return Numeros(event)" required>
                </div>

                <button type="button" class="btn btn-primary btn-update btn-xs" id="provincia">Actualizar</button>
                <button type="reset" class="btn btn-default btn-xs">Limpiar</button>
                <button type="button" class="btn btn-default btn-volver btn-xs"
                        data-dismiss="modal" id="provincia">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>
