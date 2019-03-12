$(function() {
    $('#principal').click(function () {
        var url = 'layout';
        $('#contenido').load(url);
    });
//principal es el id de la etiqueta <a>

    $('#provincia').click(function () {
        var url = 'provincia';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#central').click(function () {
        var url = 'central';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#bateria').click(function () {
        var url = 'bateria';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#grupo').click(function () {
        var url = 'grupo';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#empresa').click(function () {
        var url = 'empresa';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#mantenimiento').click(function () {
        var url = 'mantenimiento';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#tecnologia').click(function () {
        var url = 'tecnologia';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#indisponible').click(function () {
        var url = 'indisponible';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#potencia').click(function () {
        var url = 'potencia';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#hecho').click(function () {
        var url = 'hecho';
        $('#contenido').load(url).fadeIn(500);
    });



    //*****Aqui estan los botones principales
    $(document).on("click",".btn-create",function () {
        var url=$(this).attr('id');
        $('.modal-body').load(url);
    });


    $(document).on("click",".btn-edit",function () {
        var url=$(this).attr('id');
        $('.modal-body').load(url);
    });

    $(document).on("click",".btn-volver",function () {
        var url=$(this).attr('id');
        $('#contenido').load(url);
    });


});
