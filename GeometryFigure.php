<?php

class GeometryFigure
{
    protected string $name = '';

    public function getName(): string
    {
        return $this->name;
    }
    public function getArea(): float
    {
        return 0.0;
    }

    public function getPerimeter(): float
    {
        return 0.0;
    }

    public function __toString(){
        return 'Имя фигуры:' . $this->getName() .'<br/>'.
            'Площадь' . $this->gerArea() . '<br/>'.
            'Периметр' . $this->getPerimeter() . '<br/>;
        }
}