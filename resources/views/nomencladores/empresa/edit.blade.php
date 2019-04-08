<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" method="POST" id="form" class="update" action="empresa/{{$emp->idEmpresas}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">
                <div class="form-group">
                    <h4 class="text-primary">Nombre</h4>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input type="hidden" name="_id" id="_id" value="{{$emp->idEmpresas}}">
                    <input class="form-control" name="nombre" id="txt_nombre"
                           value="{{$emp->nombre}}" onkeypress="return Letras(event)" required>
                </div>

                <button type="button" class="btn btn-info btn-update btn-xs" data-dismiss="modal"
                        id="empresa">Actualizar</button>
                &nbsp;
                <button type="reset" class="btn btn-primary btn-xs">Limpiar</button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-volver btn-xs"
                        data-dismiss="modal" id="empresa">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
