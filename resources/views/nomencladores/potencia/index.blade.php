<div class="page-header">
    <h1 class="animated fadeInLeft">Potencias</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-default btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="potencia/create" title="Agregar">
    Agregar
</button>

<br><br>
<div id="message" style="display: none"></div>
<table class="table table-striped table-bordered" id="t_potencia">
    <thead>
    <tr>
        <th>Cantidad</th>
        <th>Retirado de la Potencia</th>
        <th>Acciones</th>
    </tr>
    </thead>
    @foreach($potencias as $pot)
        <tr>
            <td>{{$pot->cantidad}}</td>
            <td>{{$pot->retirado_potencia}}</td>
            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" data-value="potencia/{{$pot->idPotencias}}/edit"
                            id="{{$pot->idPotencias}}" title="Editar"></button>
                    &nbsp;
                    <button id="{{$pot->cantidad}}" class="btn fa fa-remove btn-danger btn-delete btn-modal"
                            data-toggle="modal" data-value="potencia/{{$pot->idPotencias}}" title="Eliminar"></button>
                </form>   </td>
        </tr>
    @endforeach
</table>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


