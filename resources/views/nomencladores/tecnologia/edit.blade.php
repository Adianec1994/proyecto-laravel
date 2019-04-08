<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" method="POST" id="form" class="update" action="tecnologia/{{$tecno->idTecnologias}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">
                <div class="form-group">
                    <h4 class="text-primary">Tipo de Tecnología</h4>
                    <input type="text" name="tipo" class="form-control"  id="txt_nombre" value="{{$tecno->tipo}}" onkeypress="return Letras(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Serie</h4>
                    <input type="text" name="serie" class="form-control" id="txt_cantidad" value="{{$tecno->serie}}" onkeypress="return Numeros(event)" required>
                </div>

                <button type="button" class="btn btn-info btn-update btn-xs" data-dismiss="modal"
                        id="tecnologia">Actualizar</button>
                &nbsp;
                <button type="reset" class="btn btn-primary btn-xs">Limpiar</button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-volver btn-xs"
                        data-dismiss="modal" id="tecnologia">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
