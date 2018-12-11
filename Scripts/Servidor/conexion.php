<?php
/*Una mejor manera de implementar la conexion es a traves de PDO (PHP Object Data)
*/
function conexion($h, $u, $p, $bd)
{
  if (!($enlace = mysqli_connect($h, $u, $p, $bd))) {
    die("Falló la conexion, ERROR: ".mysqli_connection_error());
  }else{
    return $enlace;
  }
}
function cerrarConexion($enlace)
{
  mysqli_close($enlace);
}
 ?>
