<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" method="POST" id="form" class="update" action="bateria/{{$bat->idBaterias}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">

                <div class="form-group">
                    <h4 class="text-primary">Provincia</h4>
                    <select id="provincia" name="idProvincias" class="form-control">
                        <option value="{{$bat->centralElectrica->idProvincias}}">{{$bat->centralElectrica->provincia->nombre}}</option>
                        @foreach($provin as $p)
                            <option value="{{$p->idProvincias}}">{{$p->nombre}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <h4 class="text-primary">Central Eléctrica</h4>
                    <select id="central" name="idCElectricas" class="form-control">
                        <option value="{{$bat->idCElectricas}}">{{$bat->centralElectrica->nombre}}</option>
                        @foreach($cent as $c)
                            <option value="{{$c->idCElectricas}}">{{$c->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Número</h4>
                    <input class="form-control" id="txt_numero" value="{{$bat->numero}}"
                    name="numero" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Cantidad Grupos</h4>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input class="form-control" id="txt_cantidadGrupos" value="{{$bat->cantidad_grupos}}"
                    name="cantidad_grupos" onkeypress="return Numeros(event)" required>
                </div>

                <button type="button" class="btn btn-info btn-update btn-xs" data-dismiss="modal" id="bateria">Actualizar</button>
                &nbsp;
                <button type="reset" class="btn btn-primary btn-xs">Limpiar</button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-volver btn-xs" data-dismiss="modal" id="bateria">Cancelar</button>
            </form>
        </div>

</div>
</div><!-- /.panel-->
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
