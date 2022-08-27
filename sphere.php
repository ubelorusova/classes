<?php
class Sphere extends GeometryFigure
{
    public function __construct(float $_diametr = 0.0)
    {
        this->diametr = $_diametr;
        }

        public function getName(): string
        {
            return 'Сфера'; //
        }

        public float $diametr = 0.0;

    public function getParimeter(): float
    {
        return parent::getPerimeter();
    }
    public function getArea(): float
    {
        return parent::getArea();
    }
}