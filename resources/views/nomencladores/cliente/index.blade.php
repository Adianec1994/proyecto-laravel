<h3>Clientes</h3>
<button class="btn-add btn btn-default btn-xs" id="cliente/create" title="Agregar">+</button>
<button class="btn-close btn btn-default btn-xs" id="inicio" title="Cerrar">X</button>
<br>
<table class="table table-striped" id="t_cliente">
    <thead>
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Accion</th>
    </tr>
    </thead>
    @foreach($clientes as $cli)
        <tr>
            <td>{{$cli->name}}</td> <td>{{$cli->code}}</td>
            <td><button class="btn btn-success fa fa-eye btn-ver btn-xs" id="ventas/{{$cli->id}}" title="Ver Ventas"></button></td>
        </tr>
    @endforeach

</table>
<script type="text/javascript">
    $(document).ready( function () {
        $('#t_cliente').DataTable(
            {
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "zeroRecords": "Nada encontrado - lo siento",
                    "info": "Mostrando _PAGE_ de _PAGES_",
                    "search": "Buscar:",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            }
        );
    });

</script>
<script src="{{asset('js/nomenclador.js')}}"></script>