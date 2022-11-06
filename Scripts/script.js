$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        // Validado Nombre ==============================
        if( $('#FirstName').val() == '' ){
            errores += '<p>Write your name please</p>';
            $('#FirstName').css("border-bottom-color", "#F14B4B")
        } else{
            $('#FirstName').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Correo ==============================
        if( $('#Email').val() == '' ){
            errores += '<p>Write your email please</p>';
            $('#Email').css("border-bottom-color", "#F14B4B")
        } else{
            $('#Email').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Mensaje ==============================
        if( $('#Menssage1').val() == '' ){
            errores += '<p> Dont cant send empty message</p>';
            $('#Menssage1').css("border-bottom-color", "#F14B4B")
        } else{
            $('#Menssage1').css("border-bottom-color", "#d1d1d1")
        }

        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errors found</h3>'+
                                        errores+
                                        '<span id="btnClose">Close</span>'+
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
