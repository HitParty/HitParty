<?php

session_start();
$conexion = mysqli_connect("localhost", "root", "", "bd_prueba") or die (mysqli_error());

//Ingresar datos en base de datos

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave ='$clave'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    $usuario = mysqli_fetch_assoc($verificar_usuario);

     $_SESSION['u_user'] = $usuario;
   	 header("Location: index.html");
     } else {
     echo '<script>
          alert("Datos Incorrectos");
          window.history.go(-1);
          </script>';
}



mysqli_close($conexion);

?>