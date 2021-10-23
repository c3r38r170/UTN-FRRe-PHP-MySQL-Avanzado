<?php

require_once 'conexion.php';

$res=mysqli_query($con,"SELECT * FROM clases");

?>
<h2>Unidades</h2>
<div class="unidades">
	<b>Unidad</b><b>Fecha</b>
<?php
	while ($row=mysqli_fetch_assoc($res)){
?>
	<span class="unidad"><?=$row['unidad']?></span>
	<span class="fecha"><?=$row['fecha']?></span>
<?php
	}
?>
</div>