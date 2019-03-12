
<h3>Registro de Categorias</h3>
<button class="btn-close btn btn-default fa fa-plus btn-create btn-xs" id="categoria/create" title="Agregar"></button>
<button class="btn-close btn btn-default fa fa-close btn-close btn-xs" id="inicio" title="Cerrar"></button>
<br>
<div id="message" style="display: none"></div>
<table class="table table-striped" id="t_categoria">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Codigo</th>
        <th>Accion</th>
    </tr>
    </thead>
    @foreach($categorias as $cat)
        <tr>
            <td>{{$cat->name}}</td>
            <td>{{$cat->code}}</td>
            <td>
                <input type="hidden" id="token" value="{{csrf_token()}}">
                <button class=" btn btn-default fa fa-pencil-square-o btn-edit btn-xs" id="categoria/{{$cat->id}}/edit" title="Editar"></button>
                <button class=" btn btn-default fa fa-remove btn-delete btn-xs" id="categoria/{{$cat->id}}" title="Eliminar"></button>
            </td>
        </tr>
    @endforeach
</table>
<script type="text/javascript">
    $(document).ready( function () {
        $('#t_categoria').DataTable(
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
