<div class="page-header">
    <h1 class="animated fadeInLeft">Tipos de Mantenimientos</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="mantenimiento/create" title="Agregar">
    Agregar
</button>
<br><br>
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

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" id="{{$mtto->idTipoMtto}}"
                            title="Editar" data-value="mantenimiento/{{$mtto->idTipoMtto}}"></button>
                    &nbsp;
                <button id="{{$mtto->tipo}}" class="btn fa fa-remove btn-danger btn-delete btn-modal"
                        data-toggle="modal" data-value="mantenimiento/{{$mtto->idTipoMtto}}" title="Eliminar"></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<br><br><br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


