<h4 class="modal-title" id="myModalLabel">Editar Tipo de Tecnología </h4>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" id="form" action="tecnologia/{{$tecno->idTecnologias}}" enctype="multipart/form-data">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" id="_method" value="PUT">
                <div class="form-group">
                    <label>Tipo de Tecnología</label>
                    <input type="text" name="nombre" class="form-control"  id="txt_nombre" value="{{$tecno->tipo}}" onkeypress="return Letras(event)" required>
                </div>

                <div class="form-group">
                    <label>Serie</label>
                    <input type="text" name="serie" class="form-control" id="txt_cantidad" value="{{$tecno->serie}}" onkeypress="return Numeros(event)" required>
                </div>

                <a type="button" data-dismiss="modal" class="btn btn-primary btn-update btn-xs"
                   data-toggle="modal" data-target="#centralModalWarning" data-value=""
                   id="tecnologia">Actualizar</a>
             {{--   <button type="button" class="btn btn-primary btn-update btn-xs" id="tecnologia">Actualizar</button>--}}
                <button type="reset" class="btn btn-default btn-xs">Limpiar</button>
                <button type="button" class="btn btn-default btn-volver btn-xs"
                        data-dismiss="modal" id="tecnologia">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
