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
             //reset error message
             form.find('.help-block').remove();
             form.find('.form-group').removeClass('has-error');
          //alert(form.serialize());
              $.ajax({
              url: url,
              type: 'POST',
              /*dataType: 'json',*/
              headers: {'X-CSRF-TOKEN': token},
                  data:form.serialize(),
                  success: function (response) {

                      $('#contenido').load(response);
                      Toast.fire({
                          type: 'success',
                          title: 'Cambios realizados'
                      });

                  },
                  error: function (xhr) {
                      var errors= xhr.responseJSON;
                      if ($.isEmptyObject(errors)===false){
                          Swal.fire({
                            position: 'top-end',
                            type: 'error',
                            title: '¡Datos incorrectos revise!',
                            showConfirmButton: false,
                            timer: 1500
                          });
                          $.each(errors.errors, function (key,value)
                          {
                              $('#'+key)
                                  .closest('.form-group')
                                  .addClass('has-error')
                                  .append('<span class="help-block"><strong>'+value+'</strong></span>');
                          });

                      }

                  }
                  });
              return false;
              });


   ///Para eliminar con alertas
    $(document).on('click', '.btn-delete', function (e) {
        e.preventDefault();
        var token=$("#token").val();
        var form=$('.delete');
        var url= $(this).attr('data-value');
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });

        Swal.fire({
            title: '¿Esta seguro que desea eliminar el registro?',
            text: $(this).attr('id'),
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#d61b2b',
            cancelButtonColor: '#8f9add',
            confirmButtonText: 'Estoy seguro!',
            cancelButtonText:'Cancelar'
            })
            .then( (result) => {
                            if (result.value) {
                            $.ajax({
                                url:url,
                                headers:{'X-CSRF-TOKEN':token},
                                method: 'DELETE',
                                data:form.serialize(),
                                success: function (response) {
                                   // window.location.reload(true);
                                    $('#contenido').load(response);

                                    Toast.fire({
                                                type: 'success',
                                                title: 'Cambios realizados'
                                                });

                                    }
                                });
                            }
                });
    });


    $(document).on('click', '.btn-edit', function (e) {
        e.preventDefault();
        url= $(this).attr('data-value');
        $('#modal-body').load(url);
    });


    $('.btn-show').click(function (e) {
        e.preventDefault();
        url= $(this).attr('data-value');
        $('#modal-body').load(url);
    });



    //Para que al darle al boton el modal se quite
//   $("#myModal").modal('toggle');

//este funciona perfecto
    $('.btn-update').click(function (e) {
        e.preventDefault();
        var token = $(".token").val();
      form=$('#form');
      url=form.attr('action');
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });

        $.ajax({
            url: url,
            type: 'PUT',
            /*dataType: 'json',*/
            headers: {'X-CSRF-TOKEN': token},
            data: form.serialize(),
            success: function (response) {

                $('#contenido').load(response);
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
    })
});

    /*Para la hora*/
    $('.mask-time').mask('00:00:00');

});





//script para la hora en el formulario
    jQuery(function($) {
        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false,
            disableFocus: true,
            icons: {
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down'
            }
        }).on('focus', function() {
            $('#timepicker1').timepicker('showWidget');
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });

        //script para la fecha en el formulario
        $('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true
        })
        //show datepicker when clicking on the icon
            .next().on(ace.click_event, function(){
            $(this).prev().focus();
        });


    });

    //funcion para los selects dinamicos
/*$("#provincia").change(event => {
    $.get('central/${event.target.value}',function(res,prov)){
        $("#central").empty();
        res.forEach(element => {
            $("#central").append('<option value=${element.id}>${element.nombre}</option>');
        });
    });
});*/


//funcion para los mensajes de los botones
$(function () {
    $('[data-toggle="modal"]').tooltip();
});

//---------------------cargar coberturas por centrales----------------
$('.btn-cargar').click(function(){
    url=$('#central_cobertura').val();
    $('#contenido-control').load(url);

});
//---------------------cargar pailas por centrales----------------
$('.btn-cargar-paila').click(function(){
    url=$('#central_paila').val();
    $('#contenido-control-paila').load(url);

});
//---------------------cargar trabajos de MCV por grupos----------------
/*$('.btn-cargar-mcv').click(function(){
    url=$('#grupo_mcv').val();
    $('#contenido-control-mcv').load(url);

});*/

//---------------------cargar generaciones por grupos----------------
$('.btn-cargar-generacion').click(function(){
    url=$('#grupo_generacion').val();
    $('#contenido-control-generacion').load(url);

});

//---------------------cargar datos de emergencias por provincias----------------
$('.btn-cargar-emergencia').click(function(){
    url=$('#provincia_emergencia').val();
    $('#contenido-control-emergencia').load(url);

});

//---------------------cargar datos de trabajos de MCV por grupos----------------
$('.btn-cargar-trabajos').click(function(){
    url=$('#grupos_trabajos').val();
    $('#contenido-control-trabajos').load(url);

});


