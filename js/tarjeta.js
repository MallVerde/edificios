

$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';
    
         
        if( $('#nombre').val() == '' ){
            errores += '<p>Escriba un nombre</p>';
            $('#nombre').css("border-bottom-color", "#F14B4B")
        } else{
            $('#nombre').css("border-bottom-color", "#d1d1d1")
        }

        
        if( $('#num_tar').val() == '' ){
            errores += '<p>Ingrese un número de tarjeta</p>';
            $('#num_tar').css("border-bottom-color", "#F14B4B")
        } else{
            $('#num_tar').css("border-bottom-color", "#d1d1d1")
        }

        
        if( $('#cvc').val() == '' ){
            errores += '<p>Ingrese un cvc</p>';
            $('#cvc').css("border-bottom-color", "#F14B4B")
        } else{
            $('#cvc').css("border-bottom-color", "#d1d1d1")
        }

          
        if( $('#mes').val() == '' ){
            errores += '<p>Ingrese un mes</p>';
            $('#mes').css("border-bottom-color", "#F14B4B")
        } else{
            $('#mes').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#año').val() == '' ){
            errores += '<p>Ingrese un año</p>';
            $('#año').css("border-bottom-color", "#F14B4B")
        } else{
            $('#año').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#monto').val() == '' ){
            errores += '<p>Ingrese un monto de pago</p>';
            $('#monto').css("border-bottom-color", "#F14B4B")
        } else{
            $('#monto').css("border-bottom-color", "#d1d1d1")
        }

        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });
});
