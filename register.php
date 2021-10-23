<?php

require 'constantes.php';

$con->query("INSERT INTO $nombreTablaUsuarios (user,pass,secret_number) VALUES ('{$_POST['user']}','".password_hash($_POST['pass'],PASSWORD_DEFAULT)."',{$_POST['secret_number']})");

header('Location: unidad8.php?ok');

?>