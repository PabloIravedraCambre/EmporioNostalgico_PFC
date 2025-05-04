<?php

require_once "../../config/dbConnection.php";

class producto{
    private $nombreProducto;
    private $precioProducto;
    private $idProducto;
    private $cantidadProducto;

    public function __construct($nombreProducto, $precioProducto, $idProducto, $cantidadProducto){
        $this -> nombreProducto = $nombreProducto;
        $this -> precioProducto = $precioProducto;
        $this -> idProducto = $idProducto;
        $this -> cantidadProducto = $cantidadProducto;
    }

    public function getNombre(){
        return $this -> nombreProducto;
    }

    public function getPrecio(){
        return $this-> precioProducto;
    }

    public function getidProducto(){
        return $this -> idProducto;
    }

    public function getcantidad(){
        return $this -> cantidadProducto;
    }

  
    public function setNombre($nombreParam){
        $this -> nombreProducto = $nombreParam;
    }

    public function setPrecio($precioParam){
        $this -> precioProducto = $precioParam;
    }

    public function setIdproducto($idProductoParam){
        $this -> idProducto = $idProductoParam;
    }

    public function setCantidad($cantidadParam){
        $this -> cantidadProducto = $cantidadParam;
    }
}

?>