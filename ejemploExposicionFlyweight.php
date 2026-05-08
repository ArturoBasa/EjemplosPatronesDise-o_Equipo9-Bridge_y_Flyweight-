<?php
// Flyweight: representa el objeto compartido (un arbol)
class ArbolFlyweight {
    private $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function dibujar($x, $y) {
        // Se ocupa css para dibujar la figura
        echo "<div style='
            width:20px;
            height:20px;
            background-color:{$this->color};
            border-radius:50%;
            position:absolute;
            left:{$x}px;
            top:{$y}px;
        '></div>";
    }
}

// FlyweightFactory gestiona flyweights compartidos
class ArbolFactory {
    private $flyweights = [];

    public function obtenerArbol($color) {
        if (!isset($this->flyweights[$color])) {
            $this->flyweights[$color] = new ArbolFlyweight($color);
        }
        return $this->flyweights[$color];
    }
}

// Contexto almacena la posición de cada árbol
class ArbolContexto {
    private $x;
    private $y;
    private $arbol;

    public function __construct($x, $y, ArbolFlyweight $arbol) {
        $this->x = $x;
        $this->y = $y;
        $this->arbol = $arbol;
    }

    public function mostrar() {
        $this->arbol->dibujar($this->x, $this->y);
    }
}

// Cliente
$factory = new ArbolFactory();
$arbolVerde = $factory->obtenerArbol("green");

// generar el "bosque"
$bosque = [];
for ($i = 0; $i < 2000; $i++) {
    $x = rand(10, 1920);
    $y = rand(10, 1200);
    $bosque[] = new ArbolContexto($x, $y, $arbolVerde);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Patrón Flyweight: Bosque</title>
</head>
<body style="position:relative; width:1920px; height:1200px; background:#ffffff;">
    <h3>Ejemplo de Flyweight: bosque</h3>
    <?php
    foreach ($bosque as $arbol) {
        $arbol->mostrar();
    }
    ?>
</body>
</html>

