<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
	<style>
		form{
			display: flex;
			flex-direction: column;
			margin: 1rem;
			gap: 1rem;
		}
			form > * {
				padding: .5rem;
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
		<h2>Usuarios</h2>
		<form action="caract_usuarios.php" method="post">
			<input type="text" placeholder="Nombre" name="nombre" required>
			<input type="text" placeholder="Apellido" name="apellido" required>
			<input type="number" name="edad" placeholder="Edad" min="1" required>
			<input type="submit" value="Enviar consulta">
		</form>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>