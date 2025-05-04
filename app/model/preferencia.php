<?php

require_once "../../config/dbConnection.php";

class preferencias{
    private $idPreferencia;
    private $nombrePreferencia;
    private $epocaPreferencia;
    private $cantidadPreferencia;

    public function __construct($idPreferencia, $nombrePreferencia, $epocaPreferencia, $cantidadPreferencia){
        $this -> idPreferencia = $idPreferencia;
        $this -> nombrePreferencia = $nombrePreferencia;
        $this -> epocaPreferencia = $epocaPreferencia;
        $this -> cantidadPreferencia = $cantidadPreferencia;
    }

    public function getIdPreferencia(){
        return $this->idPreferencia;
    }

    public function getNombrePreferencia(){
        return $this-> nombrePreferencia;
    }

    public function getEpocaPreferencia(){
        return $this -> epocaPreferencia;
    }

    public function getCantidadPreferencia(){
        return $this -> cantidadPreferencia;
    }

  
    public function setIdPreferencia($idPreferenciaParam){
        $this -> idPreferencia = $idPreferenciaParam;
    }

    public function setNombrePreferencia($nombrePreferenciaParam){
        $this -> nombrePreferencia = $nombrePreferenciaParam;
    }

    public function setEpocaPreferencia($idEpocaParam){
        $this -> epocaPreferencia = $idEpocaParam;
    }

    public function setCantidad($cantidadParam){
        $this -> cantidadPreferencia = $cantidadParam;
    }
}

?>