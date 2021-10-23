<?php

$d=(int)$_POST['dia'];
$m=(int)$_POST['mes'];
$a=(int)$_POST['año'];

$hasta="$d-$m-$a";
$días=ceil((strtotime($hasta)-time())/86400);

header('Location: unidad2.php?res='.$días.'&hasta='.$hasta);

?>