<table class="table table-striped table-bordered" id="t_paila">
    <thead>
    <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Combustible Factura</th>
        <th>Combustible Medición</th>
        <th>Nombre Chofer</th>
        <th>Carnet de Identidad</th>
        <th>Nombre Acompañante</th>
        <th>Carnet de Identidad</th>
        <th>Nombre Operador</th>
        <th>Carnet de Identidad</th>
        <th>Anotaciones</th>
        <th>Acciones</th>

    </tr>
    </thead>

    @foreach($pail as $paila)
        <tr>
            <td id="td1">{{$paila->fecha}}</td>
            <td id="td2">{{$paila->hora}}</td>
            <td id="td3">{{$paila->comb_factura}}</td>
            <td id="td4">{{$paila->comb_medicion}}</td>
            <td id="td5">{{$paila->nombre_Chofer}}</td>
            <td id="td6">{{$paila->ci_chofer}}</td>
            <td id="td7">{{$paila->nombre_Acomp}}</td>
            <td id="td8">{{$paila->ci_acompte}}</td>
            <td id="td9">{{$paila->nombre_Recibe}}</td>
            <td id="td10">{{$paila->ci_recibe}}</td>
            <td id="td11">{{$paila->acciones}}</td>



            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    {{--<button class=" btn fa fa-eye btn-info btn-ver btn-xs"
                            data-toggle="modal" data-target="#myModal" id="{{$paila->idPailas}}"
                            data-value="paila/{{$paila->idPailas}}/show" title="Ver"></button>--}}

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" data-value="paila/{{$paila->idPailas}}/edit"
                            id="{{$paila->idPailas}}" title="Editar Registro de Pailas"></button>

                    {{--<button id="{{$paila->idPailas}}" class="btn fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="paila/{{$paila->idPailas}}" title="Eliminar"></button>--}}
                </form>
            </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/nomenclador.js')}}"></script>
