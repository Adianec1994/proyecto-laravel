<div class="page-header">
    <h1 class="animated fadeInLeft">Trabajos de MCV</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="mcv/create" title="Agregar nuevo registro de trabajo">
    Agregar
</button>
<br><br>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-5">
                <div class="form-group">
                    <h4 class="text-primary">Seleccione el Grupo</h4>
                    <select id="grupos_trabajos" name="idGrupos" class="form-control">

                        @foreach($grupo as $dato)
                            <option value="mcv_grupo/{{$dato->idGrupos}}">{{$dato->numero}}</option>
                        @endforeach
                    </select>
                </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary waves-light btn-cargar-trabajos" data-toggle="modal" title="Ver Trabajos de MCV"><span class="fa fa-table"></span></button>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive" id="contenido-control-trabajos">


            </div>
        </div>
    </div>


<br><br><br><br><br>

<script src="{{asset('js/botones.js')}}"></script>


