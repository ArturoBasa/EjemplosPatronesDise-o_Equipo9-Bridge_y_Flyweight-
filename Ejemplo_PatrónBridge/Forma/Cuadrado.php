<?php

class Cuadrado extends Forma {

    public function __construct(Color $color) {
        parent::__construct($color); 
    }

    public function dibujar(): string {
        return "Cuadrado dibujado. " . $this->color->llenar();
    }
}