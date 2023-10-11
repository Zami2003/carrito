<?php
//variables para base de datos
$servername = "localhost";
$database = "carrito_venta";
$username = "root";
$password = "root";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// validar la conexión
if (!$conn) {
    echo "fallida";
}

?>