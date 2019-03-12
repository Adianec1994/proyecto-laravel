
<h3>Registro de Provincias</h3>
<button class="btn-close btn btn-default btn-primary fa fa-plus btn-create btn-xs"
        data-toggle="modal" data-target="#myModal" id="provincia/create" title="Agregar"></button>

<br>
<div id="message" style="display: none"></div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Cantidad Centrales</th>
        <th>Potencia Planificada</th>
        <th>Acciones</th>
    </tr>
    </thead>
    @foreach($provincias as $prov)
        <tr>
            <td>{{$prov->nombre}}</td>
            <td>{{$prov->cantidad_centrales}}</td>
            <td>{{$prov->pot_planificada}}</td>
            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    <button class=" btn btn-default fa fa-pencil-square-o btn-warning btn-edit btn-xs"
                            data-toggle="modal" data-target="#myModal" id="provincia/{{$prov->idProvincias}}/edit" title="Editar"></button>
                    <button id="{{$prov->nombre}}" class="btn btn-default fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="provincia/{{$prov->idProvincias}}" title="Eliminar"></button>
                </form> </td>
        </tr>
    @endforeach
</table>
<br><br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>

