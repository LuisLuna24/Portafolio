$(document).ready(function () {
    $('#Boton_Diseño').on('click',function(){
        $(this).closest('.Card_Contenedor').find('.Card_Avilidades').slideToggle(500).css(
            "display", "flex",
        );
    });
    $('#Boton_Web').on('click',function(){
        $(this).closest('.Card_Contenedor').find('.Card_Avilidades').slideToggle(500).css(
            "display", "flex",
            );
    });
});