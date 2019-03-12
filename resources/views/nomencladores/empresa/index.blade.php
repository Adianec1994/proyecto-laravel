
<h3>Registro de Empresas</h3>
<button class="btn-close btn btn-default btn-primary fa fa-plus btn-create btn-xs"
        data-toggle="modal" data-target="#myModal" id="empresa/create" title="Agregar"></button>

<br>
<div id="message" style="display: none"></div>
<table class="table table-striped" id="t_empresa">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Cantidad Provincias</th>
        <th>Acciones</th>

    </tr>
    </thead>
    @foreach($empresas as $emp)
        <tr>
            <td>{{$emp->nombre}}</td>
            <td>{{$emp->cantidad_provicias}}</td>

            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    <button class=" btn btn-default fa fa-pencil-square-o btn-warning btn-edit btn-xs"
                            data-toggle="modal" data-target="#myModal" id="empresa/{{$emp->idEmpresas}}/edit" title="Editar"></button>
                    <button id="{{$emp->nombre}}" class="btn btn-default fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="empresa/{{$emp->idEmpresas}}" title="Eliminar"></button>
                </form> </td>
        </tr>
    @endforeach
</table>
<br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>



