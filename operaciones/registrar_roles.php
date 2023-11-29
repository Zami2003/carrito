<?php
include("../include/conexion.php");
//recibir la informacion

$nombre=$_POST['nombre'];



 $consulta="INSERT INTO roles (nombre)
VALUES ('$nombre')";

$ejecutar= mysqli_query($conexion, $consulta);

if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Registro Fallido";
}
