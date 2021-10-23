<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$comentario=$_POST['comentario'];

$archivoComentarios=fopen('comentarios.txt','a');
fputs($archivoComentarios,"<article><p>\"$comentario\"</p><small>- $nombre ($email), ".date("Y-m-d H:m:s")."</small></article>");
fclose($archivoComentarios);

header('Location: unidad3.php?ok');

?>