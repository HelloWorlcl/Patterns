<?php

namespace CreationalPatterns\FactoryMethod;

class CarFerrari implements IVehicle
{
    /**
     * @var string
     */
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}
