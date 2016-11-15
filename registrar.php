<?php
include 'cn.php';
//Ingresar datos en base de datos
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];
// Consulta para insertar
$insertar = "INSERT INTO usuarios(nombre, apellidos, correo, usuario, clave, telefono) VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$clave', '$telefono' )";


$verificar_usuario =mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario'");
if (mysqli_num_rows ($verificar_usuario) >0){
    echo '<script>
          alert("Error, el usuario ya se encuentra registrado");
          window.history.go(-1);
          </script>';
    exit;
}
$verificar_correo =mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$correo'");
if (mysqli_num_rows ($verificar_correo) >0){
    echo '<script>
          alert("Error, el correo ya se encuentra registrado");
          window.history.go(-1);
          </script>';
    exit;
}

//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo '<script>
          alert("Error al registrarse");
          window.history.go(-1);
          </script>';
} else {
    echo '<script>
          alert("Registrado con exito");
          window.history.go(-1);
          </script>';
} header("Location: index.html");
//Cerrar conexion
mysqli_close($conexion);