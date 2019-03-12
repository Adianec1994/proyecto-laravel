
<h3>Números de Baterias</h3>
<button class="btn-close btn btn-default btn-primary fa fa-plus btn-create btn-xs"
        data-toggle="modal" data-target="#myModal" id="bateria/create" title="Agregar"></button>

<br>
<div id="message" style="display: none"></div>
<table class="table table-striped" id="t_bateria">
    <thead>
    <tr>
        <th>Número</th>
        <th>Cantidad de Grupos</th>
        <th>Acciones</th>
    </tr>
    </thead>
    @foreach($baterias as $bat)
        <tr>
            <td>{{$bat->numero}}</td>
            <td>{{$bat->cantidad_grupos}}</td>
            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    <button class=" btn btn-default fa fa-pencil-square-o btn-warning btn-edit btn-xs"
                            data-toggle="modal" data-target="#myModal" id="bateria/{{$bat->idBaterias}}/edit" title="Editar"></button>
                    <button id="{{$bat->numero}}" class="btn btn-default fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="bateria/{{$bat->idBaterias}}" title="Eliminar"></button>
                </form> </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


