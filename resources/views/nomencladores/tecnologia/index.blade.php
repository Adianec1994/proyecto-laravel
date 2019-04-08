<div class="page-header">
    <h1 class="animated fadeInLeft">Tipos de Tecnologías</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-default btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="tecnologia/create" title="Agregar">
    Agregar
</button>
<br><br>
<div id="message" style="display: none"></div>
<table class="table table-striped table-bordered" id="t_tecnologia">
    <thead>
    <tr>
        <th>Tipo</th>
        <th>Serie</th>
        <th>Acciones</th>

    </tr>
    </thead>
    @foreach($tecnologias as $tecno)
        <tr>
            <td>{{$tecno->tipo}}</td>
            <td>{{$tecno->serie}}</td>

            <td>
                <form class="delete" data-value="" >
                    <input type="hidden" id="token" value="{{csrf_token()}}">

                    <button class=" btn fa fa-pencil-square-o btn-warning btn-edit btn-modal"
                            data-toggle="modal" data-target="#myModal" data-value="tecnologia/{{$tecno->idTecnologias}}/edit"
                            id="{{$tecno->idTecnologias}}" title="Editar"></button>
                    &nbsp;
                    <button id="{{$tecno->idTecnologias}}" class="btn fa fa-remove btn-danger btn-delete btn-modal"
                            data-toggle="modal" data-value="tecnologia/{{$tecno->idTecnologias}}" title="Eliminar"></button>
                </form> </td>
        </tr>
    @endforeach
</table>
<br><br><br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


