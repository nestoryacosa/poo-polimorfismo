<?php

require_once "figura.php";

class Triangulo extends Figura{
    public $a;
    public $b;
    public $c;

    function __construct($nombre,$b,$a,$c){
        parent::__construct($nombre);
        $this->b = $b;
        $this->a = $a;
        $this->c = $c;
    }

    public function perimetro(){
        return $this->a + $this->b + $this->c;
    }

    public function area(){
        $s = ($this->a + $this->b + $this->c)/2;
        $area = sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c));
        return $area;
    }
}