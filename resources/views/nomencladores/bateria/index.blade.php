<div class="page-header">
    <h1 class="animated fadeInLeft">Números de Baterias</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="bateria/create" title="Agregar">
    Agregar
</button>

<br><br>
<div id="message" style="display: none"></div>
<table class="table table-striped table-bordered" id="t_bateria">
    <thead>
    <tr>
        <th>Provincia</th>
        <th>Central Eléctrica</th>
        <th>Número</th>
        <th>Cantidad de Grupos</th>
        <th>Acciones</th>
    </tr>
    </thead>
    @foreach($baterias as $bat)
        <tr>
            <td>{{$bat->centralElectrica->provincia->nombre}}</td>
            <td>{{$bat->centralElectrica->nombre}}</td>
            <td>{{$bat->numero}}</td>
            <td>{{$bat->cantidad_grupos}}</td>
            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" id="{{$bat->idBaterias}}"
                            title="Editar" data-value="bateria/{{$bat->idBaterias}}/edit"></button>
                    &nbsp;
                    <button id="{{$bat->numero}}" class="btn fa fa-remove btn-danger btn-delete btn-modal"
                            data-toggle="modal" data-value="bateria/{{$bat->idBaterias}}" title="Eliminar"></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<br><br><br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


