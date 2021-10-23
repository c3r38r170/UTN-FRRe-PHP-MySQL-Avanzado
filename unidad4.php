<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
	<style>

#imagenes {
	display: grid;
	grid-template-columns: repeat(2,1fr);gap: 1rem;
}
	img{
		width: 100%;
		max-height: 400px;
		object-fit: contain;
	}

	</style>
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>

	<nav>
<?php
	//Botonera
	include("botonera.php");

	//Imagen con marca de agua
	if(isset($_FILES['img']) && $_FILES['img']['size']){
		$nombre_de_imagen=pathinfo($_FILES['img']['name'],PATHINFO_FILENAME);
		$ruta = $_FILES['img']['tmp_name'];
		$ext=pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
	}else{
		$nombre_de_imagen='imagen_elegida';
		$ruta = "unidad4/imagen_elegida.jpg";
		$ext='jpg';
	}
	$marca = "unidad4/marca.png";
	$marca_im = imagecreatefrompng($marca);
	switch($ext){
	case 'jpg':
		$im_original= imagecreatefromjpeg($ruta);
		break;
	case 'png':
		$im_original= imagecreatefrompng($ruta);
		break;
	case 'gif':
		$im_original= imagecreatefromgif($ruta);
		break;
	case 'bmp':
		$im_original= imagecreatefrombmp($ruta);
		break;
	}
	imagecopy(
		$im_original
		,$marca_im
		,(imagesx($im_original)/2)-(imagesx($marca_im)/2)
		,(imagesy($im_original)/2)-(imagesy($marca_im)/2)
		,0
		,0
		,imagesx($marca_im)
		,imagesy($marca_im)
	);
	$ruta_de_imagen="unidad4/{$nombre_de_imagen}_con_marca.".$ext;
	switch($ext){
	case 'jpg':
		imagejpeg($im_original,$ruta_de_imagen);
		break;
	case 'png':
		imagepng($im_original,$ruta_de_imagen);
		break;
	case 'gif':
		imagegif($im_original,$ruta_de_imagen);
		break;
	case 'bmp':
		imagebmp($im_original,$ruta_de_imagen);
		break;
	}

	//thumbnail
	if(
		!(isset($_POST["alto"])
		&& $alto = (int)$_POST["alto"])
	)
		$alto=300;
	if(
		!(isset($_POST["ancho"])
		&& $ancho = (int)$_POST["ancho"])
	)
		$ancho=400;
	$im_original= imagecreatefromjpeg('unidad4/unidad4.jpg');
	$im_blanco = imagecreatetruecolor($ancho,$alto);
	imagecopyresized(
		$im_blanco, $im_original
		,0,0,0,0
		,$ancho,$alto
		,imagesx($im_original),imagesy($im_original)
	);
	imagejpeg($im_blanco,"unidad4/thumbnail.jpg");
	imagedestroy($im_blanco);
?>
	</nav>
	</header>
	<section>
		<h2>Imágenes con PHP</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<h4>Imagen para aplicar marca de agua</h4>
			<input type="file" name="img" id="img">
			<h4>Parámetros de thumbnail</h4>
			<input type="number" name="alto" id="alto" placeholder="Alto">
			<input type="number" name="ancho" id="ancho" placeholder="Ancho">
			<input type="submit" value="Recargar">
		</form>
		<div id="imagenes">
			<div>
				<h3>Imagen con marca de agua</h3>
				<img src="<?=$ruta_de_imagen?>" alt="Imagen con marca de agua">
			</div>
			<div>
				<h3>Thumbnail</h3>
				<img src="unidad4/thumbnail.jpg" alt="Thumbnail">
			</div>
		</div>
		
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>