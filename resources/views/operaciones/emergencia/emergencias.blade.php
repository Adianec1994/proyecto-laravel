<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Cliente</th>
        <th>Grupo</th>
        <th>Evento</th>
        <th>Estado del grupo después de la intervención</th>
        <th>Informó</th>
        <th>Acciones</th>

    </tr>
    </thead>

    @foreach($emer as $em)
        <tr>
            <td>{{$em->cliente}}</td>
            <td>{{$em->grupo}}</td>
            <td>{{$em->evento}}</td>
            <td>{{$em->estado_grupo}}</td>
            <td>{{$em->informo}}</td>



            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" class="token" value="{{csrf_token()}}">
                    {{--<button class=" btn fa fa-eye btn-info btn-ver btn-xs"
                            data-toggle="modal" data-target="#myModal" id="{{$cob->idCoberturas}}"
                            data-value="cobertura/{{$cob->idCoberturas}}/show" title="Ver"></button>--}}

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" data-value="emergencia/{{$em->idEmergencias}}/edit"
                            id="{{$em->idEmergencias}}" title="Editar los datos de Emergencias"></button>

                    {{--<button id="{{$cob->idCoberturas}}" class="btn fa fa-remove btn-danger btn-delete btn-xs"
                            data-toggle="modal" data-value="cobertura/{{$cob->idCoberturas}}" title="Eliminar"></button>--}}
                </form>
            </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/botones.js')}}"></script>
<script src="{{asset('js/nomenclador.js')}}"></script>
