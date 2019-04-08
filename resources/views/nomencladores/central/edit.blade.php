<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" method="POST" id="form" class="update" action="central/{{$cent->idCElectricas}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="method" value="POST">
                <div class="form-group">
                    <h4 class="text-primary">Provincia</h4>
                    <select id="provincia" name="idProvincias" class="form-control">
                        <option value="{{$cent->idProvincias}}">{{$cent->provincia->nombre}}</option>
                        @foreach($provin as $dato)
                            <option value="{{$dato->idProvincias}}">{{$dato->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <h4 class="text-primary">Nombre</h4>
                    <input class="form-control"  id="txt_nombre" value="{{$cent->nombre}}"
                    name="nombre" onkeypress="return NumerosyLetras(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Cantidad Baterias</h4>
                    <input class="form-control" id="txt_cantidadBaterias" value="{{$cent->cantidad_baterias}}"
                    name="cantidad_baterias" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Potencia Indisponible TM</h4>
                    <input class="form-control" id="txt_potIndisp" value="{{$cent->potIndispTM}}"
                    name="potIndispTM" onkeypress="return Numeros(event)" required>
                </div>

                <div class="form-group">
                    <h4 class="text-primary">Tecnología</h4>
                    <select id="tecnologia" name="idTecnologias" class="form-control">
                        <option value="{{$cent->idTecnologias}}">{{$cent->tecnologia->tipo}}</option>
                        @foreach($tecno as $dato)
                            <option value="{{$dato->idTecnologias}}">{{$dato->tipo}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="idEmpresas" value="1">
                <input type="hidden" name="idDatosGenerales" value="1">

                <button type="button" class="btn btn-info btn-update btn-xs" data-dismiss="modal"
                        id="central">Actualizar</button>
                &nbsp;
                <button type="reset" class="btn btn-primary btn-xs">Limpiar</button>
                &nbsp;
                <button type="button" class="btn btn-danger btn-volver btn-xs"
                        data-dismiss="modal" id="central">Cancelar</button>
            </form>
        </div>

    </div>
</div><!-- /.panel-->
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/validaciones.js')}}"></script>
