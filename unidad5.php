<?php
	session_start();
	$posibleChars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	$captcha=[];
	for($i=0;$i<6;$i++)
		$captcha[]=$posibleChars[rand(0,strlen($posibleChars)-1)];
		
	$_SESSION['captcha']=join('',$captcha);

	$image = @imagecreate(200,60);
	$colorFondo = imagecolorallocate ($image, 240, 240, 240);
	$colorTexto = imagecolorallocate ($image, 0, 128, 6);
	imagestring ($image, 25, 50, 20, join(' ',$captcha), $colorTexto);

	ob_start();
	imagejpeg($image);
	$imageString = ob_get_contents(); // read from buffer
	ob_end_clean();
?><!DOCTYPE html>
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
				#captcha {
					display: grid;grid-template-areas: "a c" "b c";
				}
					#captcha > img{
						grid-area: c;
						margin: auto;
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
		<h2>Consultas</h2>
		<form action="cargar.php" method="post">
			<input type="text" placeholder="Nombre" name="nombre" required>
			<input type="text" placeholder="Apellido" name="apellido" required>
			<input type="email" placeholder="Correo electrónico" name="correo" required>
			<textarea name="consulta" id="" cols="30" rows="10" placeholder="Ingrese aquí su consulta" required></textarea>
			<div id="captcha">
				<span>Ingrese el texto que ve en la imagen:</span>
				<input type="text" name="captcha" required>
				<img src="data:image/jpeg;base64,<?=base64_encode($imageString)?>" alt="Captcha">
			</div>
			<input type="submit" value="Enviar consulta">
		</form>
		<?php
		if(isset($_GET['ok']))
			echo '<span class="ok">¡Gracias por su comentario!</span>';
		elseif(isset($_GET['fail']))
			echo '<span class="fail">Hubo un problema con el captcha, intente nuevamente.</span>';
		?>
	</section>
	<aside>
		<span>Actualmente hay
    <?php
			require 'conexion.php';
			$res=mysqli_query($con,"SELECT COUNT(*) AS 'cantidad_consultas' FROM `consultas`");
			echo mysqli_fetch_assoc($res)['cantidad_consultas'];
		?>
		consulta/s.</span>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>