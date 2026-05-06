<?php

abstract class Forma {
    protected Color $color;

    public function __construct(Color $color) {
        $this->color = $color;
    }

    abstract public function dibujar(): string;
}