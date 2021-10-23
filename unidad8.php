<?php

require_once 'constantes.php';

$con->query("CREATE TABLE IF NOT EXISTS $nombreTablaUsuarios (
	ID INT AUTO_INCREMENT,
	user VARCHAR(40) NOT NULL,
	pass CHAR(60) NOT NULL,
	secret_number INT NOT NULL,
	PRIMARY KEY(ID)
)");

?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
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
		<?php if(isset($_SESSION['ID'])){ ?>
		<h2>Bienvenid@, <?= $_SESSION['user']?></h2>
			<?php if(isset($_GET['ok'])){?>
				<p class="ok">Se ha cambiado exitosamente el número secreto.</p>
			<?php } ?>
		<form action="cambiar_numero.php" method=POST>
			<p>Tu número secreto es: <input type="number" name="secret_number" value="<?= $_SESSION['secret_number']?>">.</p>
			<input type="submit" value="Cambiar">
		</form>
		<form action="logout.php" method="post">
			<input type="submit" value="Salir">
		</form>
		<?php }else{ ?>
		<h2>Acceso</h2>
		<form action="login.php" method=POST name=login id=login>
			<input type="text" name="user" placeholder="Nombre de usuario">
			<input type="password" name="pass" placeholder="Contraseña">
			<input type="submit" value="Acceder">
		</form>
		<?php if(isset($_GET['ok'])){?>
		<p class="ok">Se ha registrado correctamente.</p>
		<?php } ?>
		<?php if(isset($_GET['error'])){?>
		<p class="fail"><?=$_GET['error']?></p>
		<?php } ?>
		<h2>Registro</h2>
		<form action="register.php" method=POST name=register id=register>
			<input type="text" name="user" placeholder="Nombre de usuario">
			<input type="password" name="pass" placeholder="Contraseña">
			<input type="number" name="secret_number" placeholder="Número secreto">
			<input type="submit" value="Registrarse">
		</form>
		<?php } ?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>