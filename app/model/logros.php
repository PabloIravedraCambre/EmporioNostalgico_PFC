<?php

require_once "../../config/dbConnection.php";

class Logros{
    private $idlogro;
    private $idusuario;
    private $nombreLogro;
    private $fechaLogro;

    public function __construct($idlogro, $idusuario, $nombrelogro, $fechaLogro){
        $this -> idlogro = $idlogro;
        $this -> idusuario = $idusuario;
        $this -> nombreLogro = $nombrelogro;
        $this -> fechaLogro = $fechaLogro;
  
    }

    public function getIdlogro(){
        return $this -> idlogro;
    }

    public function getIdusuario(){
        return $this -> idusuario;
    }


    public function getNombreLogro(){
        return $this -> nombreLogro;
    }


    public function getFecha(){
        return $this -> fechaLogro;
    }


    public function setIdlogro($idlogroParam){
        $this -> idlogro = $idlogroParam;
    }

    public function setIdusuario($idusuarioParam){
        $this -> idusuario = $idusuarioParam;
    }

    public function setNombre($nombreParam){
        $this -> nombreLogro = $nombreParam;
    }

    public function setFecha($fechaParam){
        $this -> fechaLogro = $fechaParam;
    }
}


?>