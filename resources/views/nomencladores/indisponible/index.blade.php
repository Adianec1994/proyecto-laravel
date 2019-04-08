<div class="page-header">
    <h1 class="animated fadeInLeft">Tipos de Indisponibilidad</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-default btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="indisponible/create" title="Agregar">
    Agregar
</button>

<br><br>
<div id="message" style="display: none"></div>
<table class="table table-striped table-bordered" id="t_indisponible">
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

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal" id="{{$indisp->idTipoIndisp}}"
                            data-toggle="modal" data-target="#myModal" data-value="indisponible/{{$indisp->idTipoIndisp}}/edit"
                            title="Editar"></button>
                    &nbsp;
                    <button id="{{$indisp->tipo}}" class="btn fa fa-remove btn-danger btn-delete btn-modal"
                            data-toggle="modal" data-value="indisponible/{{$indisp->idTipoIndisp}}" title="Eliminar"></button>
                </form>  </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


