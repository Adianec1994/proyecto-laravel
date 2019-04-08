$(document).ready( function () {
    $('.table').DataTable(
        {
            'destroy':true,
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
