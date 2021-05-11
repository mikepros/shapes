<?php

namespace Mikepros\Shapes;

final class Rectangle extends Shape {

    public function __construct(private int $a, private int $b) {}

    public function getArea() : int
    {
        return $this->a * $this->b;
    }
}