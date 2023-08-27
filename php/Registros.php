<?php
include "conexion.php";

$Matricula = $_POST['matricula'];
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellidos'];
$Carrera = $_POST['carrera'];

$sql=$conexion->query ("INSERT INTO alumnos (Matricula,Nombre,Apellidos,Carrera) values ('$Matricula','$Nombre','$Apellido','$Carrera')");

?>