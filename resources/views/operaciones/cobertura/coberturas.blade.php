<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Capacidad <br>Total<br>Almacen(Lts)</th>
        <th>Existencia Total<br> Cierre Día Anterior (Lts)</th>
        <th>Capacidad de vacío (Lts)</th>
        <th>Plan de Reserva (Lts)</th>
        <th>Fondaje (Lts)</th>
        <th>Existencia Operativa <br>(Lts)</th>
        <th>Cobertura (Hrs)</th>
        <th>Consumo (Lts)</th>
        <th>Suministro CUPET (Lts)</th>
        <th>Acciones</th>

    </tr>
    </thead>

    @foreach($cober as $cob)
        <tr>
            <td>{{$cob->capacTotalAlmac}}</td>
            <td>{{$cob->existTotalDiaAnterior}}</td>
            <td>{{$cob->capacVacio}}</td>
            <td>{{$cob->planReserva}}</td>
            <td>{{$cob->fondaje}}</td>
            <td>{{$cob->existOperativa}}</td>
            <td>{{$cob->coberturaHoras}}</td>
            <td>{{$cob->consumo}}</td>
            <td>{{$cob->suminCupet}}</td>


            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" class="token" value="{{csrf_token()}}">
                    {{--<button class=" btn fa fa-eye btn-info btn-ver btn-xs"
                            data-toggle="modal" data-target="#myModal" id="{{$cob->idCoberturas}}"
                            data-value="cobertura/{{$cob->idCoberturas}}/show" title="Ver"></button>--}}

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" data-value="cobertura/{{$cob->idCoberturas}}/edit"
                            id="{{$cob->idCoberturas}}" title="Editar los datos de Cobertura"></button>

                    {{--<button id="{{$cob->idCoberturas}}" class="btn fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="cobertura/{{$cob->idCoberturas}}" title="Eliminar"></button>--}}
                </form>
            </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/nomenclador.js')}}"></script>
