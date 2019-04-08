<div class="page-header">
    <h1 class="animated fadeInLeft">Registro de Provincias</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="provincia/create" title="Agregar"><b>  Agregar</b></button>

<br><br>
<div id="message" style="display: none"></div>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Cantidad Centrales</th>
        <th>Potencia Planificada</th>
        <th>Acciones</th>
    </tr>
    </thead>
    @foreach($provincias as $prov)
        <tr>
            <td>{{$prov->nombre}}</td>
            <td>{{$prov->cantidad_centrales}}</td>
            <td>{{$prov->pot_planificada}}</td>
            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" data-value="provincia/{{$prov->idProvincias}}/edit"
                            id="{{$prov->idProvincias}}" title="Editar"></button>
                    &nbsp;
                    <button id="{{$prov->nombre}}" class="btn fa fa-remove btn-danger btn-delete btn-modal"
                            data-toggle="modal" data-value="provincia/{{$prov->idProvincias}}" title="Eliminar"></button>
                </form> </td>
        </tr>
    @endforeach
</table>
<br><br><br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>

