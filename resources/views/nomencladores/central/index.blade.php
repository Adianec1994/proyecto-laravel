<div class="page-header">
    <h1 class="animated fadeInLeft">Registro de Centrales Eléctricas</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-default btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="central/create" title="Agregar">
    Agregar
</button>

<br><br>
<div id="message" style="display: none"></div>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
<th>Provincia</th>
        <th>Nombre</th>
        <th>Cantidad Baterias</th>
        <th>Potencia Indisponible por Telemecánica</th>
        <th>Tecnología</th>
        <th>Acciones</th>
    </tr>
    </thead>
    @foreach($central_electricas as $cent)
        <tr>

            <td>{{$cent->provincia->nombre}}</td>
            <td>{{$cent->nombre}}</td>
            <td>{{$cent->cantidad_baterias}}</td>
            <td>{{$cent->potIndispTM}}</td>
            <td>{{$cent->tecnologia->tipo}}</td>

            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" id="{{$cent->idCElectricas}}"
                            title="Editar" data-value="central/{{$cent->idCElectricas}}/edit"></button>
                    &nbsp;
                    <button id="{{$cent->nombre}}" class="btn fa fa-remove btn-danger btn-delete btn-modal"
                            data-toggle="modal" data-value="central/{{$cent->idCElectricas}}" title="Eliminar"></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<br><br><br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


