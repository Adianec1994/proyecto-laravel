<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Fecha</th>
        <th>Hora Entrada AM</th>
        <th>Hora Salida AM</th>
        <th>Hora Entrada M</th>
        <th>Hora Salida M</th>
        <th>Hora Entrada PM</th>
        <th>Hora Salida PM</th>
        <th>Reporta</th>
        <th>Tiempo de<br> Operación</th>
        <th>Acciones</th>

    </tr>
    </thead>

    @foreach($gener as $gen)
        <tr>
            <td>{{$gen->fecha}}</td>
            <td>{{$gen->hEntradaAM}}</td>
            <td>{{$gen->hSalidaAM}}</td>
            <td>{{$gen->hEntradaM}}</td>
            <td>{{$gen->hSalidaM}}</td>
            <td>{{$gen->hEntradaPM}}</td>
            <td>{{$gen->hSalidaPM}}</td>
            <td>{{$gen->reporta}}</td>
            <td>{{$gen->tiempoOperacion}}</td>


            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" class="token" value="{{csrf_token()}}">
                    {{--<button class=" btn fa fa-eye btn-info btn-ver btn-xs"
                            data-toggle="modal" data-target="#myModal" id="{{$cob->idCoberturas}}"
                            data-value="cobertura/{{$cob->idCoberturas}}/show" title="Ver"></button>--}}

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" data-value="generacion/{{$gen->idGener}}/edit"
                            id="{{$gen->idGener}}" title="Editar los datos de Generación"></button>

                    {{--<button id="{{$cob->idCoberturas}}" class="btn fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="cobertura/{{$cob->idCoberturas}}" title="Eliminar"></button>--}}
                </form>
            </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/nomenclador.js')}}"></script>
