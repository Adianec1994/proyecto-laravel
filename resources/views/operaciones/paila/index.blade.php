<div class="page-header">
    <h1>Control de Acompañamiento de Pailas</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="paila/create" title="Agregar nuevo registro de paila"> Agregar</button>

<br><br>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-5">
                <div class="form-group">
                    <h4 class="text-primary">Seleccione la Central Eléctrica</h4>
                    <select id="central_paila" name="idCElectricas" class="form-control">
                        @foreach($central_electricas as $dato)
                            <option value="paila_central/{{$dato->idCElectricas}}">{{$dato->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary waves-light btn-cargar-paila" data-toggle="modal" title="Ver datos de Pailas"><span class="fa fa-table"></span></button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive" id="contenido-control-paila">


        </div>
    </div>
</div>


<br><br><br><br><br>


<script src="{{asset('js/botones.js')}}"></script>


