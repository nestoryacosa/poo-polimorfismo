<?php
require_once "figura.php";

class Rectangulo extends Figura{
    public $nombre;
    public $largo;
    public $ancho;

    function __construct($nombre,$largo,$ancho){
        parent::__construct($nombre,$largo,$ancho);
        $this->largo = $largo;
        $this->ancho = $ancho;
    }

    public function perimetro(){
        return 2*($this->largo + $this->ancho);
    }

    public function area(){
        return $this->largo * $this->ancho;
    }
}
