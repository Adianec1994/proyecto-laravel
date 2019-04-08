<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Reporta</th>
        <th>Fecha de Reparación</th>
        <th>Tipo de Trabajo</th>
        <th>Hora de Entrada</th>
        <th>Hora de Salida</th>
        <th>Estado del Grupo</th>
        <th>Acciones</th>

    </tr>
    </thead>


            @foreach($mcv->trabajoMcv as $trab)
            <tr>
                <td>{{$trab->nombre_informa}}</td>
            <td>{{$trab->pivot->fechaReparacion}}</td>
            <td>{{$trab->pivot->tipoTrabajo}}</td>
            <td>{{$trab->pivot->horaEntrada}}</td>
            <td>{{$trab->pivot->horaSalida}}</td>
            <td>{{$trab->pivot->estadoGrupo}}</td>


            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" class="token" value="{{csrf_token()}}">
                    <button class=" btn fa fa-eye btn-info btn-ver btn-xs"
                            data-toggle="modal" data-target="#myModal" id="{{$trab->pivot->idTrabajos}}"
                            data-value="mcv/{{$trab->pivot->idTrabajos}}/show" title="Ver"></button>

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" data-value="mcv/{{$trab->pivot->idTrabajos}}/edit"
                            id="{{$trab->pivot->idTrabajos}}" title="Editar los datos"></button>

                    <button id="{{$trab->pivot->idTrabajos}}" class="btn fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="mcv/{{$trab->pivot->idTrabajos}}" title="Eliminar"></button>
                </form>
            </td>
        </tr>
        @endforeach
</table>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/nomenclador.js')}}"></script>
