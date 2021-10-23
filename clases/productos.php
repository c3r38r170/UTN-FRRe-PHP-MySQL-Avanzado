<?php

class Producto{
	private $codigo;
	private $producto;
	private $descripcion;
	private $precio;
	
	function __construct($cod,$pro,$des,$pre){
		$this->codigo = $cod;
		$this->producto = $pro;
		$this->descripcion = $des;
		$this->precio = $pre;
	}

	public function mostrarHTMLParaCatalogo(){
		// boton agregar
		echo "
		<form action=carrito/insertar_producto.php>
			<input type=\"hidden\" name=\"codigo\" value={$this->codigo}>
			<h3>{$this->producto}</h3>
			<p>{$this->descripcion}</p>
			<span>{$this->precio}</span>
			<input type=\"submit\" value=\"Comprar\">
		</form>
		";
	}
	public function mostrarHTMLParaCarrito($indice){
		// boton borrar
		echo "
		<form action=\"carrito/eliminar_producto.php\">
			<input type=\"hidden\" name=\"indice\" value=$indice>
			<h3>{$this->producto}</h3>
			<p>{$this->descripcion}</p>
			<span class=\"precio\">{$this->precio}</span>
			<input type=\"submit\" value=\"Eliminar\">
			</form>
		";
	}

	public function getCodigo(){
		return $this->codigo;
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
	public function getProducto(){
		return $this->producto;
	}
	public function getPrecio(){
		return $this->precio;
	}

	static public function getAll($db){
		$todosLosProductos=[];
		foreach($db->enviarConsulta("SELECT * FROM `productos`") as $pro)
			$todosLosProductos[]=new Producto($pro['codigo'],$pro['producto'],$pro['descripcion'],$pro['precio']);
		return $todosLosProductos;
	}
	static public function getOne($db,$cod){
		$datos=$db->enviarConsulta("SELECT * FROM `productos` WHERE `codigo` = $cod")[0];
		return new Producto($cod,$datos['producto'],$datos['descripcion'],$datos['precio']);
	}
}

?>