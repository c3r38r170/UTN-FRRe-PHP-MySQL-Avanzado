<?php

require 'constantes.php';

$user =$con->query("SELECT * FROM $nombreTablaUsuarios WHERE user= '{$_POST['user']}'");

var_dump($user);

if(!$user->num_rows){
	header('Location: unidad8.php?error=Nombre de usuario incorrecto.');
	die;
}

$user=$user->fetch_assoc();

if(password_verify($_POST['pass'],$user['pass'])){
	$_SESSION=$user;
	header('Location: unidad8.php');
}else header('Location: unidad8.php?error=Contraseña incorrecta.');

?>