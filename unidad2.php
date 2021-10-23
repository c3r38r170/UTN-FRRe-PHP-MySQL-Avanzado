<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
	<style>
		input{
			display:block;
			margin: 10px;
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
		<h2>Eventos</h2>
		<form action="calculo_fecha.php" method="POST">
			<input type="number" name="dia" id="dia" placeholder="Día" min=1 max=31 required>
			<input type="number" name="mes" id="mes" placeholder="Mes" min=1 max=12 required>
			<input type="number" name="año" id="año" placeholder="Año" min=1582 required>
			<input type="submit" value="Calcular">
			<script>
				let fecha = new Date;
				document.getElementById('dia').value=fecha.getDate();
				document.getElementById('mes').value=fecha.getMonth()+1;
				document.getElementById('año').value=fecha.getFullYear();
			</script>
		</form>
		<?php
			if(isset($_GET['res'])){
				$dias=(int)$_GET['res'];
				switch($dias){
					case 0:
						$mensaje="¡El día {$_GET['hasta']} es hoy!";
						break;
					case 1:
						$mensaje="Falta un día para el ".$_GET['hasta'];
						break;
					default:
						$mensaje="Faltan $dias días para el ".$_GET['hasta'];
						break;
				}
				echo "<span class=\"ok\">$mensaje</span>";
			}
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