<?php

require_once '../importar_todo.php';

$codigo=(int)$_GET["codigo"];

$carrito = new Carrito($db);
$carrito->introducirProducto($db,Producto::getOne($db,$codigo));

header('Location: ../unidad7.php');

?>