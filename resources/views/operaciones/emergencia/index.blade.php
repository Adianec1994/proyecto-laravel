<div class="page-header">
    <h1 class="animated fadeInLeft">Trabajos en Grupos de Generación de Emergencias</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="emergencia/create" title="Agregar nuevo registro">
    Agregar
</button>
<br><br>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-5">
                <div class="form-group">
                    <h4 class="text-primary">Seleccione la Provincia</h4>
                    <select id="provincia_emergencia" name="idProvincias" class="form-control">

                        @foreach($provincias as $dato)
                            <option value="emergencia_provincia/{{$dato->idProvincias}}">{{$dato->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary waves-light btn-cargar-emergencia" data-toggle="modal" title="Ver Datos de Emergencias"><span class="fa fa-table"></span></button>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive" id="contenido-control-emergencia">


            </div>
        </div>
    </div>


<br><br><br><br><br>


<script src="{{asset('js/botones.js')}}"></script>


