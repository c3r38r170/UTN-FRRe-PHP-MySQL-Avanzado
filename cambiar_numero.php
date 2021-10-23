<?php

require_once 'constantes.php';

$nuevoNumero=(int)$_POST['secret_number'];
$_SESSION['secret_number']=$nuevoNumero;

$con->query("UPDATE $nombreTablaUsuarios SET secret_number=$nuevoNumero");

header('Location: unidad8.php?ok');

?>