<div class="page-header">
    <h1 class="animated fadeInLeft">Registro de Grupos Electrógenos Sincronizados</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-default btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="grupo/create" title="Agregar">
    Agregar
</button>

<br><br>
<div id="message" style="display: none"></div>
<table class="table table-striped table-bordered" id="t_grupo">
    <thead>
    <tr>
        <th>Provincia</th>
        <th>Central Eléctrica</th>
        <th>Bateria</th>
        <th>Estado</th>
        <th>Número</th>
        <th>Potencia Instalada</th>
        <th>Potencia Disponible</th>
        <th>Potencia Indisponible<br> por Mantenimiento</th>
        <th>Potencia Indisponible<br> por Averia</th>
        <th>Acciones</th>
    </tr>
    </thead>
    @foreach($grupos as $grup)
        <tr>
            <td>{{$grup->bateria->centralElectrica->provincia->nombre}}</td>
            <td>{{$grup->bateria->centralElectrica->nombre}}</td>
            <td>{{$grup->bateria->numero}}</td>
            <td>{{$grup->estado->tipo}}</td>
            <td>{{$grup->numero}}</td>
            <td>{{$grup->pot_instalada}}</td>
            <td>{{$grup->pot_disponible}}</td>
            <td>{{$grup->potIndispMtto}}</td>
            <td>{{$grup->potIndispAveria}}</td>
            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" id="{{$grup->idGrupos}}"
                            title="Editar" data-value="grupo/{{$grup->idGrupos}}/edit"></button>
                        &nbsp;
                    <button id="{{$grup->numero}}" class="btn fa fa-remove btn-danger btn-delete btn-modal"
                            data-toggle="modal" data-value="grupo/{{$grup->idGrupos}}" title="Eliminar"></button>
                </form> </td>
        </tr>
    @endforeach
</table>
<br><br><br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


