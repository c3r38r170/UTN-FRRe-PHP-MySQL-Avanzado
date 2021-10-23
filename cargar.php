<?php

session_start();
if(!isset($_SESSION['captcha'])
	|| $_SESSION['captcha'] != $_POST['captcha']
){
	header('Location: unidad5.php?fail');
	die;
}

require_once 'conexion.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$consulta=$_POST['consulta'];

mysqli_query($con,"INSERT INTO `consultas` (`nombre`,`apellido`,`correo`,`consulta`) VALUES ('$nombre','$apellido','$correo','$consulta')");

header('Location: unidad5.php?ok');

?>