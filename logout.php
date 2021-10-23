<?php

session_start();
$_SESSION=[];
session_destroy();

header('Location: unidad8.php');

?>