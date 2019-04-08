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

    $('#estado').click(function () {
        var url = 'estado';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#hecho').click(function () {
        var url = 'hecho';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#cobertura').click(function () {
        var url = 'cobertura';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#paila').click(function () {
        var url = 'paila';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#generacion').click(function () {
        var url = 'generacion';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#emergencia').click(function () {
        var url = 'emergencia';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#mcv').click(function () {
        var url = 'mcv';
        $('#contenido').load(url).fadeIn(500);
    });

    $('#usuario').click(function () {
        var url = 'usuario';
        $('#contenido').load(url).fadeIn(500);
    });



    //*****Aqui estan los botones principales
    $(document).on("click",".btn-create",function () {
        var url=$(this).attr('id');
        $('.modal-body').load(url);
    });

    $(document).on("click",".btn-volver",function () {
        var url=$(this).attr('id');
        $('#contenido').load(url);
    });





});
