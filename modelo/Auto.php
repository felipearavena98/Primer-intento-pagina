<?php


class Auto {
    //Estos son mis atributos
    private $patente;
    private $dueno;
    private $modelo;
    private $marca;
    private $ano;
    
        
    function __construct() {
        
    }
    function getPatente() {
        return $this->patente;
    }

    function getDueno() {
        return $this->dueno;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getMarca() {
        return $this->marca;
    }

    function getAno() {
        return $this->ano;
    }

    function setPatente($patente) {
        $this->patente = $patente;
    }

    function setDueno($dueno) {
        $this->dueno = $dueno;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }



    
}
