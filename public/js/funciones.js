$(function() {
    $('#contenido').load('inicio');

    $('#inicio').click(function () {
        var url='inicio';
        $('#contenido').load(url);
    });

    $('#categoria').click(function () {
    	var url='categoria';
        $('#contenido').load(url);
    });

    $('#producto').click(function () {
        var url='producto';
        $('#contenido').load(url);
    });

    $('#proveedor').click(function () {
        var url='proveedor';
        $('#contenido').load(url);
    });

    $('#cliente').click(function () {
        var url='cliente';
        $('#contenido').load(url);
    });

    $('#facturar').click(function () {
        var url='facturar';
        $('#contenido').load(url);
    });

    $('#pfacturar').click(function () {
        var url='prefacturar';
        $('#contenido').load(url);
    });

    $(document).on("click",".btn-create",function () {
        var url=$(this).attr('id');
        $('#contenido').load(url);
    });

    $(document).on("click",".btn-edit",function () {
        var url=$(this).attr('id');
        $('#contenido').load(url);
    });

    $(document).on("click",".btn-delete",function () {
        var url=$(this).attr('id');
        var id=url.split("/")[1];

        var token=$("#token").val();
        $.ajax({
            url:url,
            type:'DELETE',
            headers:{'X-CSRF-TOKEN':token},
            data:id,
            success:function(result){
                if(result == 1){
                    $("#message").html("Categoria con productos asignados");
                    $('#message').fadeIn(2000);
                    $('#message').fadeOut(4000);
                }
                else
                    $("#contenido").html(result);
            }
        });
    });

    $(document).on("click",".btn-store",function () {
        var url=$(this).attr('id');
        var nombre=$('#txt_nombre').val();
        var codigo=$('#txt_codigo').val();
        var token=$(".token").val();
        $.ajax({
            url:url,
            type:'POST',
            dataType:'json',
            headers:{'X-CSRF-TOKEN':token},
            data:{s_nombre:nombre,s_codigo:codigo},
            success:function(result){
                $("#contenido").html(result);
            },
            error:function (errors) {
                $("#msg").html("");
                $("#msg").append(errors.responseJSON.s_nombre);
                $("#msg").append('<br>');
                $("#msg").append(errors.responseJSON.s_codigo);
                $("#msg").fadeIn();
                $("#msg").fadeOut(5000);
            }
        });
    });

    $(document).on("click",".btn-update",function () {
        var url=$(this).attr('id');
        var nombre=$('#txt_nombre').val();
        var codigo=$('#txt_codigo').val();
        var id=$('#_id').val();
        var metodo=$('#_method').val();
        var token=$(".token").val();

        $.ajax({
            url:url,
            type:'POST',
            dataType:'json',
            headers:{'X-CSRF-TOKEN':token},
            data:{s_nombre:nombre,s_codigo:codigo,s_id:id,s_metodo:metodo},
            success:function(result){
                $("#contenido").html(result);
            }
        });
    });

    $(document).on("click",".btn-close",function () {
        var url=$(this).attr('id');
        $('#contenido').load(url);
    });

    $(document).on("click",".btn-volver",function () {
        var url=$(this).attr('id');
        $('#contenido').load(url);
    });

    $(document).on("click",".btn-ver",function () {
        var url=$(this).attr('id');
        $('#contenido').load(url);
    });

    $(document).on("click","#salir",function () {
        var url=$(this).attr('id');
        $.ajax({
            url:url,
            type:'POST',
            dataType:'html',
            data:{valor:1},
            success:function(result){
                if(result == 0){
                    $('#contenido').load('login');
                }
            }
        });
    });

    $(document).on("click",".btn-clientes",function () {
        var url=$(this).attr('id');
        $('#contenido').load(url);
    });

    $(document).on("click","#rcategorias",function () {
        var url=$(this).attr('id');
        $('#contenido').load(url);
    });

})



