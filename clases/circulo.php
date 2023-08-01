<?php

require_once "figura.php";
class Circulo extends Figura{
    public $radio;

    function __construct($nombre,$radio){
        parent::__construct($nombre);
        $this->radio = $radio;
    }

    public function perimetro():float {
        return 2*pi()*$this->radio;
    }

    public function area():float {
        $r = $this->radio;
        return pi()*$r*$r;
    }


}