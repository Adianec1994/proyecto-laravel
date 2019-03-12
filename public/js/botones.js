$(function() {

   $('.btn-store').click(function (event) {
       event.preventDefault();
    var url = $(this).attr('id');
    var token = $(".token").val();
    var form=$('.create');
      // alert(url);
    var Toast = Swal.mixin({
           toast: true,
           position: 'top-end',
           showConfirmButton: false,
           timer: 5000
    });
    //alert(form.serialize());
        $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        headers: {'X-CSRF-TOKEN': token},
            data:form.serialize(),
            success: function (response) {
                $("#myModal").modal('toggle');
                $('.contenido').load(response);
                Toast.fire({
                    type: 'success',
                    title: 'Cambios realizados'
                });

            },
            error: function (xhr) {
                var errors= xhr.responseJSON;
                if ($.isEmptyObject(errors)===false){
                    Swal.fire({
                        type: 'error',
                        title: '¡Datos incorrectos revise!',
                        showConfirmButton: true
                    });
                    $.each(errors.errors, function (key,value)
                    {
                        $('#'+key)
                            .closest('.form-group')
                            .addClass('has-error')
                            .append('<span class="help-block"><strong>'+value+'</strong></span>')

                    });

                }

            }
            });
        });



   ///Para eliminar con alertas
    $('.btn-delete').click(function (e) {
        e.preventDefault();
        var token=$("#token").val();
        var form=$('.delete');
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
        url= $(this).attr('data-value');
        Swal.fire({
            title: '¿Esta seguro que desea eliminar el registro?',
            text: $(this).attr('id'),
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#d61b2b',
            cancelButtonColor: '#8f9add',
            confirmButtonText: 'Estoy seguro!',
            cancelButtonText:'Cancelar'
        }).then((result) => {
                            if (result.value) {
                            $.ajax({
                                url:url,
                                headers:{'X-CSRF-TOKEN':token},
                                method: 'DELETE',
                                data:form.serialize(),
                                success: function (response) {
                                   // window.location.reload(true);
                                    $('.contenido').load(response);

                                    Toast.fire({
                                                type: 'success',
                                                title: 'Cambios realizados'
                                                });

                                    }
                                });
                            }
                });
    });


    $('.btn-edit').click(function (e) {
        e.preventDefault();
        url= $(this).attr('data-value');
        $('#modal-body').load(url);
    });



//pruebaaaaa
  /*  $('#mantenimiento').click(function ()
    {
    var id = $('#id').val();
    var tipo = $('#tipo').val();
    var route = "{{url('mantenimiento')}}/"+id+"";
    var token = $("#token").val();

    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type:'PUT',
        dataType:'json',
        data:{tipo: tipo},
        success:function (data) {
            if(data.success == 'true')
            {
                $("#contenido").html(data);
              //  $("message-update").fadeIn();
            }
        },
        error:function (data) {
            $("#error").html(data.responseJSON.tipo);
            $("#message-error").fadeIn();
            if (data.status ==422){
                console.clear();
            }

        }
    });
    });*/

    //Para que al darle al boton el modal se quite
//   $("#myModal").modal('toggle');

//este funciona con el error de la ruta
    $('.btn-update').click(function () {
        var url = 'mtto';
        var token = $(".token").val();
        var form=$('.update');
       // alert(url);
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': token},
            data:form.serialize(),
            //data: $('#formUpdate').serialize(),
            success: function (response) {
                $("#contenido").html(response);
            }
        });
    });


// boton update con alertas
  /*  $('.btn-update').click(function (event) {
        event.preventDefault();
        var url = 'mtto';
        var token = $(".token").val();
        var form=$('.update');
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': token},
            data:form.serialize(),
            success: function (response) {
                $("#myModal").modal('toggle');
                $('.contenido').load(response);
                Toast.fire({
                    type: 'success',
                    title: 'Cambios realizados'
                });

            },
            error: function (xhr) {
                var errors= xhr.responseJSON;
                if ($.isEmptyObject(errors)===false){
                    Swal.fire({
                        type: 'error',
                        title: '¡Datos incorrectos revise!',
                        showConfirmButton: true
                    });
                    $.each(errors.errors, function (key,value)
                    {
                        $('#'+key)
                            .closest('.form-group')
                            .addClass('has-error')
                            .append('<span class="help-block"><strong>'+value+'</strong></span>')

                    });

                }

            }
        });
    });
*/


});
