<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="200" border="1">
  <tr>
    <th scope="col">ID TAREA</th>
    <th scope="col">NOMBRE</th>
    <th scope="col">DESCRIPCION</th>
    <th scope="col">FECHA</th>
  </tr>

<?php
require("ConexionBBDD.php");
$consulta="SELECT * FROM tarea";
if (!$resultado=$mysqli->query($consulta))
{
  echo "Error en la ejecución debido a: <br>";
  echo "query: ". $consulta;
  echo "Num error: ".$mysqli->errno." <br>";
  echo "Error: ".$mysqli->error." <br>";
  die("Fallo");
}
$numregistros=$resultado->num_rows;
for ($i=1;$i<=$numregistros;$i++)
{   $fila=$resultado->fetch_assoc();

    echo ("<tr><td>".$fila["id_tarea"]."</td>");
    echo ("<td>".$fila["nombreTarea"]."</td>");
    echo ("<td>".$fila["descripcion"]."</td>");
    echo ("<td>".$fila["fecha"]."</td>");
  
 } 
?>  
</table>
</body>
</html>
