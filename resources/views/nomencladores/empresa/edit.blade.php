<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" class="formEdit">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input type="hidden" name="_id" id="_id" value="{{$emp->idEmpresas}}">
                    <input class="form-control" name="nombre" id="txt_nombre"
                           value="{{$emp->nombre}}" onkeypress="return Letras(event)" required>
                </div>

                <div class="form-group">
                    <label>Cantidad de Provincias</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input class="form-control" name="cantidad_provincias" id="txt_cantidad"
                           value="{{$emp->cantidad_provincias}}" onkeypress="return Numeros(event)" required>
                </div>

                <button type="button" class="btn btn-primary btn-update btn-xs"  id="empresa">Actualizar</button>
                <button type="reset" class="btn btn-default btn-xs">Limpiar</button>
                <button type="button" class="btn btn-default btn-volver btn-xs"
                        data-dismiss="modal" id="empresa">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
