<?php
include ("../include/conexion.php");


// Recib ir la informacion
$dni= $_POST['dni'];
$nombres_apellidos= $_POST['nombres_apellidos'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$fecha_nacimiento= $_POST['fecha_nacimiento'];

 // mostrar los resultados
//  echo $dni."<br>";
//  echo $nombres_apellidos."<br>";
//  echo $correo."<br>";
//  echo $telefono."<br>";
//  echo $direccion."<br>";
//  echo $fecha_nacimiento."<br>";


 $consulta = "INSERT INTO usuario(dni,apellidos_nombres,corrreo,telefono,dirección,fecha_nacimiento,password,activo, reset_password,token_pasword) VALUES ('$dni', '$nombres_apellidos', '$correo', '$telefono', '$direccion', '$fecha_nacimiento', '$dni', 1,0, '')";
 $ejecutar = mysqli_query($conn,$consulta);
 if ($ejecutar) {
    echo "resgistro exitoso";
 }else{
    echo "Error al resgistrar";
 }
?>