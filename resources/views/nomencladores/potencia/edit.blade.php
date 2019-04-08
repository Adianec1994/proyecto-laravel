<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" method="POST" id="form" class="update" action="potencia/{{$pot->idPotencias}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">
                <div class="form-group">
                    <h4 class="text-primary">Cantidad</h4>
                    <input class="form-control" name="cantidad" id="txt_cantidad" value="{{$pot->cantidad}}"
                           onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Retirado de la Potencia</h4>
                    <input type="checkbox" class="form-control" name="retirado_potencia" id="txt_retirado_potencia"
                           value="{{$pot->retirado_potencia}}">
                </div>


                <button type="button" class="btn btn-info btn-update btn-xs"
                        data-dismiss="modal" id="potencia">Actualizar</button>
                &nbsp;
                <button type="reset" class="btn btn-primary btn-xs">Limpiar</button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-volver btn-xs"
                        data-dismiss="modal" id="potencia">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
