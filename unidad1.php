<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
	<style>
		label{
			display:block;
			margin: 10px;
		}
		.unidades{
			display: grid;
			grid-template-columns:repeat(2,1fr);
			background: black;
			gap: .2rem;
			padding: .2rem;
		}
			.unidades>*{
				background: white;
				padding: .2rem;
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
		<h2>Agenda de clases</h2>

		<form action="insertar_clases.php" method="post">
			<?php
				if(isset($_GET['ok']))
					echo '<span class="ok">Se ha registrado la unidad.</span>';
			?>
			<label>
				<span>Unidad:</span>
				<input required name="unidad">
			</label>
			<label>
				<span>Fecha</span>
				<input type="date" required name="fecha">
			</label>
			<input type="submit" value="Enviar">
		</form>

	</section>
	<aside>

	<?php require_once 'ver_clases.php'; ?>

  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>