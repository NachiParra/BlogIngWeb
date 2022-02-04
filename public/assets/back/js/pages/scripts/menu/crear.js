$(document).ready(function(){
    App.validacionGeneral('form-general');
    $('#icono').on('change', function(){
        $('#mostrar-icono').removeClass().addClass($(this).val());
    });
});
