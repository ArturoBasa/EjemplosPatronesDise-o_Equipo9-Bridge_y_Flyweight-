<?php

class Circulo extends Forma {

    public function __construct(Color $color) {
        parent::__construct($color); 
    }

    public function dibujar(): string {
        return "Circulo dibujado. " . $this->color->llenar();
    }
}