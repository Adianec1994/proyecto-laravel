
<h3>Registro de Grupos Electrógenos Sincronizados</h3>
<button class="btn-close btn btn-default btn-primary fa fa-plus btn-create btn-xs"
        data-toggle="modal" data-target="#myModal" id="grupo/create" title="Agregar"></button>

<br>
<div id="message" style="display: none"></div>
<table class="table table-striped" id="t_grupo">
    <thead>
    <tr>
        <th>Número</th>
        <th>Potencia Instalada</th>
        <th>Potencia Disponible</th>
        <th>Potencia Indisponible por Mantenimiento</th>
        <th>Potencia Indisponible por Averia</th>
        <th>Acciones</th>
    </tr>
    </thead>
    @foreach($grupos as $grup)
        <tr>
            <td>{{$grup->numero}}</td>
            <td>{{$grup->pot_instalada}}</td>
            <td>{{$grup->pot_disponible}}</td>
            <td>{{$grup->potIndispMtto}}</td>
            <td>{{$grup->potIndispAveria}}</td>
            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    <button class=" btn btn-default fa fa-pencil-square-o btn-warning btn-edit btn-xs"
                            data-toggle="modal" data-target="#myModal" id="grupo/{{$grup->idGrupos}}/edit" title="Editar"></button>
                    <button id="{{$grup->numero}}" class="btn btn-default fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="grupo/{{$grup->idGrupos}}" title="Eliminar"></button>
                </form> </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


