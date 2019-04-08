<div class="page-header">
    <h1 class="animated fadeInLeft">Registro de Empresas</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-default btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="empresa/create" title="Agregar">
    Agregar
</button>

<br><br>
<div id="message" style="display: none"></div>
<table class="table table-striped table-bordered" id="t_empresa">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Acciones</th>

    </tr>
    </thead>
    @foreach($empresas as $emp)
        <tr>
            <td>{{$emp->nombre}}</td>

            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" id="{{$emp->idEmpresas}}"
                            title="Editar" data-value="empresa/{{$emp->idEmpresas}}/edit"></button>
                    &nbsp;
                    <button id="{{$emp->nombre}}" class="btn fa fa-remove btn-danger btn-delete btn-modal"
                            data-toggle="modal" data-value="empresa/{{$emp->idEmpresas}}" title="Eliminar"></button>
                </form> </td>
        </tr>
    @endforeach
</table>
<br><br><br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>



