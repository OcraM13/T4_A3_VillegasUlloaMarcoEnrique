<?php

/*
Strore Procedure

Prepared Statement
*/
include("conexion.php");

$host = "127.0.0.1"; //Local Host
$usuario = "Marco";
$password = "5879";
$bd = "alumnos";

$num_cont = $_post['caja_nunCon'];
$nombre = $_post['caja_Nombre'];
$primerAp = $_post['caja_priApellido'];
$segundoAp = $_post['caja_segApellido'];
$edad = $_post['caja_edad'];
$semestre = $_post['caja_semestre'];
$carrera = $_post['caja_carrera'];

$enlace = conexion($host, $usuario, $password, $bd);

$alta = "INSERT INTO alumnos values($num_cont,$nombre,$primerAp,$segundoAp,$edad,$semestre,$carrera);";

$res = mysqli_query($enlace, $alta);

if(mysqli_num_rows($res)==1){
  header("Location:../../vista/menu_principal");
}else{
  echo '<h1>Error de Acceso</h1>';
}

cerrarConexion($enlace);

 ?>
