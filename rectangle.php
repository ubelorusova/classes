<?php
class Rectangle extends GeometryFigure
{
    public function getName(): string
    {
    return 'Треугольник';
}

    public function getArea(float $a = 0.0, float $b = 0.0):
    {
    return parent::getArea($a,$b);
    }

    public function getPerimeter(): float
    {
        return parent::getPerimeter();
    }
}