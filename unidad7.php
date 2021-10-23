<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
	<style>
		form {
			border: 1px solid;
			border-radius:1rem;
			padding: 1rem;
			margin-bottom: 1rem;
		}
	</style>
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Compras</h2>
		<?php

require_once 'importar_todo.php';

$carrito = new Carrito($db);

$todosLosProductos=Producto::getAll($db);
foreach($todosLosProductos as $pro)
	$pro->mostrarHTMLParaCatalogo();

		?>
	</section>
	<aside>
    <?php

$carrito->listar();

		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>