<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Registro.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <?php   require('Global/cabesera.php');  ?>
    <section class="Formulariio_Registro">
        <div class="Formulariio_Registro_Contenedor">   
            <h1 class="Formulariio_Registro_Tiulo">Registro Alumnos</h1>
            <form class="Registro" id="Registrar" name="Registrar">
                <div class="Registro_Datos">
                    <input type="text" id="Matricula" autocomplete="off" required="">
                    <label>Matrucula</label>
                </div>
                <div class="Registro_Datos">
                    <input type="text" id="Nombre" autocomplete="off" required="">
                    <label>Nombre/s</label>
                </div>
                <div class="Registro_Datos">
                    <input type="text" id="Apellidos"autocomplete="off" required="" >
                    <label>Apellidos</label>
                </div>
                <div class="Registro_Datos">
                    <input type="text" id="Carrera" autocomplete="off" required="">
                    <label>Carrera</label>
                </div>
                
            </form>
            <button class="button" type="submit" id="Registrar_btn" value="Registrar">Registar</button>
        </div>
    </section>

</body>
</html>

<script type="text/javascript">
    $("#Registrar_btn").click(function(){
        var txt;
        var r = confirm("Deseas agregar a este empleado?");
    if (r == true) {
        cadena = "matricula=" + $('#Matricula').val() + 
        "&nombre=" + $('#Nombre').val() +
        "&apellidos=" + $('#Apellidos').val() +
        "&carrera=" + $('#Carrera').val() +
        "&accion=" + 1;

        $.ajax({
            url:'php/Registros.php',
            type: "POST",
            data: cadena,
            success: function(r){
                if (r == 1) {
                    alert("Este usuario ya ha sido registrado");
                } else if (r == 0) {
                    alert("Agregado con exito");
                    location.reload();

                } else {
                    alert("Fallo al agregar");
                }
            }
        });
    }
});
</script>