<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
	<style>

	form{
		display: grid;
		gap: .5rem;
		margin-bottom: .5rem;
	}
		input{
			width: 50%;
		}
			[type="submit"]{
				margin: auto;
			}
		textarea{
			resize: vertical;
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
		<h2>Comentarios</h2>
		<form method="POST" action="comentarios.php" required>
			<input type="text" placeholder="Nombre y Apellido" name="nombre" required>
			<input type="email" name="email" placeholder="Correo electrónico" required>
			<textarea placeholder="Comentario" name="comentario" required></textarea>
			<input type="submit" value="Enviar">
		</form>
		<?php

		if(isset($_GET['ok']))
			echo '<span class="ok">¡Gracias por su comentario!</span>';

		$comentarios=fopen('comentarios.txt','r');
		fpassthru($comentarios);
		fclose($comentarios);

		?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>