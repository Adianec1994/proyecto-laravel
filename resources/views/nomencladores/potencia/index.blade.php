
<h3>Potencias</h3>
<button class="btn-close btn btn-default btn-primary fa fa-plus btn-create btn-xs"
        data-toggle="modal" data-target="#myModal" id="potencia/create" title="Agregar"></button>

<br>
<div id="message" style="display: none"></div>
<table class="table table-striped" id="t_potencia">
    <thead>
    <tr>
        <th>Cantidad</th>
        <th>Retirado de la Potencia</th>
        <th>Acciones</th>
    </tr>
    </thead>
    @foreach($potencias as $pot)
        <tr>
            <td>{{$pot->cantidad}}</td>
            <td>{{$pot->retirado_potencia}}</td>
            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    <button class=" btn btn-default fa fa-pencil-square-o btn-warning btn-edit btn-xs"
                            data-toggle="modal" data-target="#myModal" id="potencia/{{$pot->idPotencias}}/edit" title="Editar"></button>
                    <button id="{{$pot->cantidad}}" class="btn btn-default fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="potencia/{{$pot->idPotencias}}" title="Eliminar"></button>
                </form>   </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


