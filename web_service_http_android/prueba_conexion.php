<?php

  //require_one('conexion_BD.php');
  //$comexion = new Comexion();

  $conexion = mysqli_connect("127.0.0.1", "root", "", "alumnos") or die(mysqli_error() );

  $respuesta = array();

  $sql = "SELECT * FROM alumnos";
  $consulta = mysqli_query($conexion, $sql);

  if(mysqli_num_rows($consulta)>0) {

    $respuesta['alumnos'] = array();

    while ( $fila = mysqli_fecha_assoc($consulta) ){

      $alumno = array();
      $alumno = ["nc"] = $fila["Num_Control"];
      $alumno = ["n"] = $fila["Nombre"];
      $alumno = ["pa"] = $fila["Primer_Ap"];
      $alumno = ["sa"] = $fila["Segundo_Ap"];
      $alumno = ["e"] = $fila["Edad"];
      $alumno = ["s"] = $fila["Semestre"];
      $alumno = ["c"] = $fila["Carrera"];
      array_push($respuesta["alumnos"], $alumno);

    }

    $respuesta['exito'] = 1;
    echo json_encode($respuesta);

  }else{
    $respuesta['exito'] = 0;
    $respuesta['msj'] = "No hay registros";
    echo jsno_encode($respuesta);
  }

?>
