<?php
include("conexion.php");
$host = "127.0.0.1"; //Local Host
$usuario = "Marco";
$password = "5879";
$bd = "alumnos";

$enlace = conexion($host, $usuario, $password, $bd);

//var_dump($enlace);

$usuario = $_POST['caja_usuario'];
$contraseña = $_POST['caja_password'];

//validaciones
//cifrado
//Procedimiento Almacendado para verificar el Usuario
//SELECT * from BD_usuarios_escuela where usuario = x and password = y
;
$sql = "SELECT * from cuenta where usuario = '$usuario' and contraseña = '$contraseña' ";

$res = mysqli_query($enlace, $sql);

var_dump($usuario);
var_dump($contraseña);

if(mysqli_num_rows($res) == 1){
  header("Location:../../vista/menu_principal");
}else{
  echo '<h1>Error de Acceso</h1>';
}

cerrarConexion($enlace);
 ?>
