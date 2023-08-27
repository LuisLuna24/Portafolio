$("#Registrar_btn").click(function(){
    if (r == true) {
        cadena = "Matricula" + $('#Matricula').val() + 
        "&Nombre=" + $('#Nombre').val() +
        "&Apellidos=" + $('#Apellidos').val() +
        "&Carrera=" + $('#Carrera').val() +
        "&accion=" + 1;

        $.ajax({
            url:'../php/Registros.php',
            type: "POST",
            data: cadena,
            success: function(r){
                if (r == 2) {
                    alert("Este usuario ya ha sido registrado");
                } else if (r == 1) {
                    alert("Agregado con exito");
                    location.reload();

                } else {
                    alert("Fallo al agregar" + r);
                }
            }
        });
    }
});