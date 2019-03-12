<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form">
                <input type="hidden" class="token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input type="hidden" name="_id" id="_id" value="{{$pot->idPotencias}}">
                    <input class="form-control" name="cantidad" id="txt_cantidad" value="{{$pot->cantidad}}"
                           onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <label>Retirado de la Potencia</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input class="form-control" name="retirado_potencia" id="txt_retirado_potencia" placeholder="Si o No"
                           value="{{$pot->retirado_potencia}}" onkeypress="return Letras(event)" required>
                </div>


                <button type="button" class="btn btn-primary btn-update btn-xs" id="potencia">Actualizar</button>
                <button type="reset" class="btn btn-default btn-xs">Limpiar</button>
                <button type="button" class="btn btn-default btn-volver btn-xs"
                        data-dismiss="modal" id="potencia">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
