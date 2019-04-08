<div class="page-header">
    <h1 class="animated fadeInLeft">Listado de Usuarios</h1>
</div>

<button class="btn ripple-infinite btn-gradient btn-3d btn-primary fa fa-plus btn-create btn-modal"
        data-toggle="modal" data-target="#myModal" id="usuario/create" title="Nuevo Usuario">
    Nuevo
</button>

<br><br>
<div id="message" style="display: none"></div>
<table class="table table-striped table-bordered" id="t_usuario">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Cargo</th>
        <th>Usuario</th>
        <th>Correo</th>
        <th>Permiso</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($usuario as $u)
        @if($u->activo==true)
            <tr>
                <td>{{$u->name}}</td>
                <td>{{$u->cargo}}</td>
                <td>{{$u->username}}</td>
                <td>{{$u->email}}</td>
                @if($u->rol->nombre=='SuperAdmin')
                    <td ><a class="badge badge-primary">{{$u->rol->nombre}}!!</a></td>
                @endif
                @if($u->rol->nombre!='SuperAdmin')
                    <td>{{$u->rol->nombre}}</td>
                @endif
                <td class="text-center">
                    @if($u->rol->nombre!='SuperAdmin')
                        <form class="delete">
                            {{csrf_field()}}
                            <button   data-value="usuario/{{ $u->id }}/edit" class="btn fa fa-pencil-square-o btn-warning btn-edit btn-modal" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></button>

                            <button   data-dismiss="{{$u->name}}" class="btn fa fa-remove btn-danger btn-delete btn-modal" data-toggle="modal" data-value="usuario/{{$u->id}}" ><i class="fa fa-trash"></i></button>
                        </form>
                    @endif
                </td>
            </tr>
        @endif
    @endforeach
    </tbody>
</table>
<br><br><br><br><br>
<script src="{{asset('js/nomenclador.js')}}"></script>
<script src="{{asset('js/botones.js')}}"></script>


