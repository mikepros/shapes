<?php

namespace Mikepros\Shapes;

final class Circle extends Shape {

    public function __construct(private int $radius) {}

    public function getArea() : float
    {
       return M_PI * pow($this->radius, 2);
    }
}
