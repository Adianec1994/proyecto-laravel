
<h3>Registro de Centrales Eléctricas</h3>
<button class="btn-close btn btn-default btn-primary fa fa-plus btn-create btn-xs"
        data-toggle="modal" data-target="#myModal" id="central/create" title="Agregar"></button>

<br>
<div id="message" style="display: none"></div>
<table class="table table-striped">
    <thead>
    <tr>

        <th>Nombre</th>
        <th>Cantidad Baterias</th>
        <th>Potencia Indisponible por Telemecánica</th>
        <th>Acciones</th>
    </tr>
    </thead>
    @foreach($central_electricas as $cent)
        <tr>
            <td>{{$cent->nombre}}</td>
            <td>{{$cent->cantidad_baterias}}</td>
            <td>{{$cent->potIndispTM}}</td>

            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    <button class=" btn btn-default fa fa-pencil-square-o btn-warning btn-edit btn-xs"
                            data-toggle="modal" data-target="#myModal" id="central/{{$cent->idCElectricas}}/edit" title="Editar"></button>
                    <button id="{{$cent->nombre}}" class="btn btn-default fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="central/{{$cent->idCElectricas}}" title="Eliminar"></button>
                </form> </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


