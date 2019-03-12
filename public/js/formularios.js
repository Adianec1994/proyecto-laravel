$(function() {

//VALIDACIONES PARA FORMULARIOS CON ALERTAS

 /*$('#form').validate({
     rules: {
         nombre: {required: true},
         numero: {required: true},
         name: {required: true},
         email: {required: true, email: true},
         email_verified_at: {required: true, equalTo: '#email'},
         password: {required: true},
         //confirm:{required:true,equalTo:'#password'},
         cantidad: {required: true},
         tipo: {required: true},
         cantidad_centrales: {required: true}


     },
     messages: {
         nombre: {required: '<strong>Campo obligatorio</strong>'},
         numero: {required: '<strong>Campo obligatorio</strong>'},
         name: {required: '<strong>Campo obligatorio</strong>'},
         email: {required: '<strong>Campo obligatorio</strong>',
         email: '<strong>El correo es invalido</strong>'},
         email_verified_at: {
             required: '<strong>Campo obligatorio</strong>',
             equalTo: '<strong>El correo no coincide</strong>'
         }
         password: {required: '<strong>Campo obligatorio</strong>'},
         //confirm:{required:'<strong>Campo obligatorio</strong>',
         equalTo:'<strong>La contraseña no coincide</strong>'}
         cantidad: {required: '<strong>Campo obligatorio</strong>'},
         tipo: {required: '<strong>Campo obligatorio</strong>'},
         cantidad_centrales: {required: '<strong>Campo obligatorio</strong>'}


     },
     submitHandler: function(form){
        form=$(form);
        url=form.attr('action');
        method=$('#method').val();
        token=$('#token').val();
        form.find('.help-block').removeClass();
        form.find('.form-group').removeClass('has-error');
        //alertas para los usuarios
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
         });
         $.ajax({
             url: url,
             headers: {'X-CSRF-TOKEN': token},
             type: method,
             datatype: 'json',
             data: form.serialize(),
             success: function (response) {
                 if (method === 'POST') {
                     $('#contenido-oculto').css('display', 'none');
                     $('.contenido').load(response);
                     form.trigger('reset');
                     Toast.fire({
                         type: 'success',
                         title: 'Datos registrados correctamente'
                     });
                 }
                 if (method === 'PUT') {
                     $('#contenido-oculto').css('display', 'none');
                     $('.bs-example-modal-lg').modal('hide');
                     $('.bs-example-modal-sm').modal('hide');
                     $('.contenido').load(response);
                     $('.mensage').children().each(function (key, value) {
                         value.remove();
                     });
                     Toast.fire({
                         type: 'success',
                         title: 'Cambios realizados'
                     });
                 }
             },
             error: function (xhr) {
                 var errors = xhr.responseJSON;
                 if ($.isEmptyObject(errors) === false) {
                     Swal.fire({
                         position: 'top-end',
                         type: 'error',
                         title: '¡Datos incorrectos revise!',
                         showConfirmButton: false,
                         timer: 1500
                     });
                     $.each(errors.errors, function (key, value) {
                         $('#' + key)
                             .closest('.form-group')
                             .addClass('has-error')
                             .append('<span class="help-block"><strong>' + value + '</strong></span>')
                     });
                 }
             }
         });
         return false;
     }
 });*/
});
