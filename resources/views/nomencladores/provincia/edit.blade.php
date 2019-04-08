<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" method="POST" id="form" class="update" action="provincia/{{$prov->idProvincias}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">
                <div class="form-group">
                    <h4 class="text-primary">Nombre</h4>
                    <input class="form-control" name="nombre" id="txt_nombre" value="{{$prov->nombre}}" onkeypress="return Letras(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Cantidad Centrales</h4>
                    <input class="form-control" name="cantidad_centrales" id="txt_cantidad" value="{{$prov->cantidad_centrales}}" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Potencia Planificada</h4>
                    <input class="form-control" name="pot_planificada" id="txt_pot" value="{{$prov->pot_planificada}}" onkeypress="return Numeros(event)" required>
                </div>
                <input type="hidden" name="idEmpresas" value="1">

                <button type="button" class="btn btn-info btn-update btn-xs"
                        data-dismiss="modal" id="provincia">Actualizar</button>
                &nbsp;
                <button type="reset" class="btn btn-primary btn-xs">Limpiar</button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-volver btn-xs"
                        data-dismiss="modal" id="provincia">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/validaciones.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>
