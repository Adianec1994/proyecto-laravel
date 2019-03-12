
<h3>Tipos de Hechos Extraordinarios</h3>
<button class="btn-close btn btn-default btn-primary fa fa-plus btn-create btn-xs"
        data-toggle="modal" data-target="#myModal" id="hecho/create" title="Agregar"></button>

<br>
<div id="message" style="display: none"></div>
<table class="table table-striped" id="t_hecho">
    <thead>
    <tr>
        <th>Tipo de Hecho Ocurrido</th>
        <th>Acciones</th>

    </tr>
    </thead>
    @foreach($tipohechos as $hec)
        <tr>
            <td>{{$hec->tipo}}</td>

            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    <button class=" btn btn-default fa fa-pencil-square-o btn-warning btn-edit btn-xs"
                            data-toggle="modal" data-target="#myModal" id="hecho/{{$hec->idtipoHechos}}/edit" title="Editar"></button>
                    <button id="{{$hec->tipo}}" class="btn btn-default fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="hecho/{{$hec->idtipoHechos}}" title="Eliminar"></button>
                </form> </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


