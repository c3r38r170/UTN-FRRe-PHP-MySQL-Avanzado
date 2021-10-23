<?php

class Usuario{
	private $nombre;
	private $apellido;
	private $edad;
	function __construct($nom,$ape,$eda){
		$this->nombre = $nom;
		$this->apellido = $ape;
		$this->edad = $eda;
	}
	public function imprime_caracteristicas(){
		echo "
		<h1>{$this->nombre} {$this->apellido} tiene {$this->edad} años.</h1>
		";
	}
}

?>