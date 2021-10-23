<?php

class Carrito{
	private $productos=[];
	function __construct($db){
		foreach($db->enviarConsulta("SELECT * FROM `compras`") as $pro)
			$this->productos[]=new Producto($pro['codigo'],$pro['producto'],$pro['descripcion'],$pro['precio']);
	}
	public function introducirProducto($db,$pro){
		$productos[]=$pro;
		$db->enviarConsulta("INSERT INTO `compras` (`codigo`,`producto`,`descripcion`,`precio`) VALUES ({$pro->getCodigo()},'{$pro->getProducto()}','{$pro->getDescripcion()}',{$pro->getPrecio()})");
	}
	public function eliminarProducto($db,$indice){
		$db->enviarConsulta("DELETE FROM `compras` WHERE `codigo` =	".$this->productos[$indice]->getCodigo());
		array_splice($this->productos,$indice,1);
	}
	public function listar(){
		echo '<div>';
		$l=count($this->productos);
		if($l==0)
			echo "<b>No hay ningún producto en el carrito.</b>";
		else for($i=0;$i<$l;$i++){
			$this->productos[$i]->mostrarHTMLParaCarrito($i);
		}
		echo '</div>';
	}
}

?>