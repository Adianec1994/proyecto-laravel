//Validaciones para los formularios
function Numeros(eventos)
    {
// Variable que define los caracteres permitidos
        var permitidos = "0123456789";
// Teclas Especiales: 8 = BackSpace, 46 = Supr, 37 = flecha izquierda,
//13=Enter , 39 = flecha derecha
        var teclas_especiales = [8, 37, 39, 46, 13,36,35];
// Obtener la tecla pulsada
        var evento = eventos || window.event;
        var codigoCaracter = evento.charCode || evento.keyCode;
        var caracter = String.fromCharCode(codigoCaracter);
// Comprobar si la tecla pulsada es alguna de las teclas especiales
        var tecla_especial = false;
        for (var i in teclas_especiales)
        {
            if (codigoCaracter == teclas_especiales[i])
            {
                tecla_especial = true;
                break;
            }
        }
// Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
        if (permitidos.indexOf(caracter) == -1)
        {
            if (tecla_especial == false)
            {
                Swal.fire({
                    type: 'error',
                    title: 'Este campo solo acepta  Números, por favor rectifique e intente nuevamente',
                    animation: false,
                    customClass: 'animated tada'
                });

            }
        }
        return permitidos.indexOf(caracter) != -1 || tecla_especial;
    }
//*******************************************************************************
    function Letras(eventos)
    {
// Variable que define los caracteres permitidos
        var permitidos = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
// Teclas Especiales: 8 = BackSpace, 46 = Supr, 37 = flecha izquierda,
//13=Enter , 39 = flecha derecha
        var teclas_especiales = [8, 37, 39, 46, 13,38,40];
// Obtener la tecla pulsada
        var evento = eventos || window.event;
        var codigoCaracter = evento.charCode || evento.keyCode;
        var caracter = String.fromCharCode(codigoCaracter);
// Comprobar si la tecla pulsada es alguna de las teclas especiales
        var tecla_especial = false;
        for (var i in teclas_especiales)
        {
            if (codigoCaracter == teclas_especiales[i])
            {
                tecla_especial = true;
                break;
            }
        }
        // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
        if (permitidos.indexOf(caracter) == -1) {
            if (tecla_especial==false) {
                Swal.fire({
                    type: 'error',
                    title: 'Este campo solo acepta letras, por favor rectifique e intente nuevamente',
                    animation: false,
                    customClass: 'animated tada'
                });
            }
        }
        return permitidos.indexOf(caracter) != -1 || tecla_especial;

    }
//*******************************************************************************
    function NumerosyLetras(eventos)
    {
// Variable que define los caracteres permitidos
        var permitidos = "0123456789abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ@ ";
// Teclas Especiales: 8 = BackSpace, 46 = Supr, 37 = flecha izquierda,
//13=Enter , 39 = flecha derecha
        var teclas_especiales = [8, 37, 39, 46, 13,38,40];
// Obtener la tecla pulsada
        var evento = eventos || window.event;
        var codigoCaracter = evento.charCode || evento.keyCode;
        var caracter = String.fromCharCode(codigoCaracter);
// Comprobar si la tecla pulsada es alguna de las teclas especiales
        var tecla_especial = false;
        for (var i in teclas_especiales)
        {
            if (codigoCaracter == teclas_especiales[i])
            {
                tecla_especial = true;
                break;
            }
        }
// Comprobar si la tecla pulsada se encuentra en los caracteres permitido
        if (permitidos.indexOf(caracter) == -1)
        {
            if (tecla_especial == false)
            {
                Swal.fire({
                    type: 'error',
                    title: 'Este Campo solo acepta Numeros y/o Letras , por favor rectifique e intente nuevamente',
                    animation: false,
                    customClass: 'animated tada'
                })

            }
        }
        return permitidos.indexOf(caracter) != -1 || tecla_especial;
    }

//*******************************************************************************
//-----------solo 2 caracteres---------------------------------------------------
    $('.DosCaracteres').on('keypress',function (event) {
        val=$(this).val();
        if(val.length>1){
            Swal.fire({
                type: 'error',
                title: 'Este Campo solo acepta hasta 2 caracteres.',
                animation: false,
                customClass: 'animated tada'
            });
        }
    });
//-----------solo 6 caracteres---------------------------------------------------
    $('.SeisCaracteres').on('keypress',function (event) {
        val=$(this).val();
        if(val.length===6){
            Swal.fire({
                type: 'error',
                title: 'Cantidad excesiva',
                animation: false,
                customClass: 'animated tada'
            })
        }
    });

