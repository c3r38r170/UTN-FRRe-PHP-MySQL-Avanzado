<?php

require_once 'conexion.php';

$unidad=$_POST['unidad'];
$fecha=$_POST['fecha'];

mysqli_query($con,"INSERT INTO `clases` (`unidad`,`fecha`) VALUES ('$unidad','$fecha')");

header('Location: unidad1.php?ok')

?>