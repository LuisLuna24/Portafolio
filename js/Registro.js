var Matri = document.getElementById('Matricula_Err');

$(document).ready(function(){
    $('#Registrar_btn').click(function(){
        if($('Matricula').val() == ""){
            Matri.style.display = 'block';
        }else if($('Nombre').val() == ""){
            Matri.style.display = 'block';
        }else if($('Apellidos').val() == ""){
            Matri.style.display = 'block';
        }else if($('Carrera').val() == ""){
            Matri.style.display = 'block';
        }
    })
})

