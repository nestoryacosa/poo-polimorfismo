<?php
require_once "clases/figura.php";
require_once "clases/circulo.php";
require_once "clases/rectangulo.php";
require_once "clases/triangulo.php";
$circ = new Circulo("primerCirculo",10);
$rectang = new Rectangulo("rectanguloUno",12, 20);
$triang = new Triangulo("triangulo1",3,4,5);

echo "El perímetro del círculo es: ".round($circ->perimetro(),2)." cm.";
echo "<br>Y su área es: ".round($circ->area(),2)." cm<sup>2</sup>.";
echo "<br><hr>";

echo "El perímetro del rectángulo es: ". $rectang->perimetro()." cm.";
echo "<br>El área del rectángulo es: ".$rectang->area()." cm<sup>2</sup>.";
echo "<br><hr>";

echo "El perímetro del triángulo es: ". $triang->perimetro()." cm.";
echo "<br>El área del triángulo es: ".$triang->area()." cm<sup>2</sup>.";