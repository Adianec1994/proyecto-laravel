<div class="page-header">
    <h1 class="animated fadeInLeft">Estados de los Grupos</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-default btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="estado/create" title="Agregar">
    Agregar
</button>

<br><br>
<div id="message" style="display: none"></div>
<table class="table table-striped table-bordered" id="t_estado">
    <thead>
    <tr>
        <th>Tipo</th>
        <th>Potencia</th>
        <th>Acciones</th>

    </tr>
    </thead>
    @foreach($estados as $est)
        <tr>
            <td>{{$est->tipo}}</td>
            <td>{{$est->potencia}}</td>

            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal" id="{{$est->idEstados}}"
                            data-toggle="modal" data-target="#myModal" data-value="estado/{{$est->idEstados}}/edit"
                            title="Editar"></button>
                    &nbsp;
                    <button id="{{$est->tipo}}" class="btn fa fa-remove btn-danger btn-delete btn-modal"
                            data-toggle="modal" data-value="estado/{{$est->idEstados}}" title="Eliminar"></button>
                </form>  </td>
        </tr>
    @endforeach
</table>
<br><br><br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


