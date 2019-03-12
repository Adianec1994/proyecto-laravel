
<h3>Tipos de Indisponibilidad</h3>
<button class="btn-close btn btn-default btn-primary fa fa-plus btn-create btn-xs"
        data-toggle="modal" data-target="#myModal" id="indisponible/create" title="Agregar"></button>

<br>
<div id="message" style="display: none"></div>
<table class="table table-striped" id="t_indisponible">
    <thead>
    <tr>
        <th>Tipo</th>
        <th>Acciones</th>

    </tr>
    </thead>
    @foreach($tiposindisponibilidades as $indisp)
        <tr>
            <td>{{$indisp->tipo}}</td>

            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    <button class=" btn btn-default fa fa-pencil-square-o btn-warning btn-edit btn-xs"
                            data-toggle="modal" data-target="#myModal" id="indisponible/{{$indisp->idTipoIndisp}}/edit" title="Editar"></button>
                    <button id="{{$indisp->tipo}}" class="btn btn-default fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="indisponible/{{$indisp->idTipoIndisp}}" title="Eliminar"></button>
                </form>  </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


