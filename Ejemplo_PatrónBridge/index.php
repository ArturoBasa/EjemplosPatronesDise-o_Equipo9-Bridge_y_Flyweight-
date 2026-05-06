<?php

require_once 'Color.php';
require_once 'Azul.php';
require_once 'Rojo.php';
require_once 'Forma.php';
require_once 'Cuadrado.php';
require_once 'Circulo.php';


$colorAzul = new Azul();
$colorRojo = new Rojo();
$formaCuadrado = new Cuadrado($colorAzul);
$formaCirculo = new Circulo($colorRojo);


echo $formaCuadrado->dibujar()."<br>"; 
echo $formaCirculo->dibujar(); 