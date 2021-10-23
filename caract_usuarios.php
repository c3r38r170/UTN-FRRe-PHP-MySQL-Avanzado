<?php

require_once 'usuarios.php';

$usuario=new Usuario($_POST['nombre'],$_POST['apellido'],$_POST['edad']);

$usuario->imprime_caracteristicas();

?>