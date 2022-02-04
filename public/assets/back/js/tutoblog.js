var App = function (){
    return{
        validacionGeneral: function(id, reglas, mensajes){
            const formulario = $('#'+ id);
            formulario.validate({
                rules: reglas,
                messages: mensajes,
                errorElement: 'div',
                erroClass: 'invalid_feedback',
                focusInvalid: false,
                ignore: "",
                highlight: function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element){
                    $(element).removeClass('is-invalid');
                },
                success: function(element){
                    element.removeClass('is-invalid');
                },
                erroPlacement: function(error, element){
                    if(element.closes('.boostrap-select').length > 0){
                        element.closes('.boostrap-select').find('.bs-placeholder').after(error);
                    }else if($(element).is('select') && element.hasClass('select2-hidden-accessible')){
                        element.next().after(error);
                    }else{
                        error.insertAfter(element);
                    }
                },
                invalidHandler: function(event, validator){
                },
                submitHandler: function(form){
                    return true;
                },
            })
        }
    }
}();
