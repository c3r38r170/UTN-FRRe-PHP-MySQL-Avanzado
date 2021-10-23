<?php

require_once '../importar_todo.php';

$indice=(int)$_GET["indice"];

$carrito = new Carrito($db);
$carrito->eliminarProducto($db,$indice);

header('Location: ../unidad7.php');

?>