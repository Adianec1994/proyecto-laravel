<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" method="POST" id="form" class="update" action="indisponible/{{$indisp->idTipoIndisp}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">
                <div class="form-group">
                    <h4 class="text-primary">Tipo de Indisponiblidad</h4>
                    <input class="form-control" id="txt_tipo" value="{{$indisp->tipo}}"
                    name="tipo" onkeypress="return Letras(event)" required>
                </div>


                <button type="button" class="btn btn-info btn-update btn-xs" id="indisponible"
                        data-dismiss="modal">Actualizar</button>
                &nbsp;
                <button type="reset" class="btn btn-primary btn-xs">Limpiar</button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-volver btn-xs"
                        data-dismiss="modal" id="indisponible">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
