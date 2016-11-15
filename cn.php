<?php
$conexion = mysqli_connect("localhost", "root", "", "bd_prueba") or die (mysqli_error());

if (!$conexion) {
    echo 'Error al conectar a la base de datos';
}
else {
    echo 'Conectado a la base de datos';
}