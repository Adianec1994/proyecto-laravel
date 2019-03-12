
<h3>Tipos de Mantenimientos</h3>
<button class="btn-close btn btn-default btn-primary fa fa-plus btn-create btn-xs"
        data-toggle="modal" data-target="#myModal" id="mantenimiento/create" title="Agregar"></button>
<br>
<div id="message" style="display: none"></div>
<table class="table table-striped" id="t_mantenimiento">
    <thead>
    <tr>
        <th>Tipo</th>
        <th>Acciones</th>

    </tr>
    </thead>
    @foreach($tipomantenimientos as $mtto)
        <tr>
            <td>{{$mtto->tipo}}</td>

            <td>
                <form class="delete" data-value="" >
                <input type="hidden" id="token" value="{{csrf_token()}}">

                    <button class=" btn btn-default fa fa-pencil-square-o btn-warning btn-edit btn-xs"
                            data-toggle="modal" data-target="#myModal" id="mantenimiento/{{$mtto->idTipoMtto}}/edit"
                            title="Editar" data-value="mantenimiento/{{$mtto->idTipoMtto}}/edit"></button>


                <button id="{{$mtto->tipo}}" class="btn btn-default fa fa-remove btn-danger btn-delete btn-xs"
                        data-toggle="modal" data-value="mantenimiento/{{$mtto->idTipoMtto}}" title="Eliminar"></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


