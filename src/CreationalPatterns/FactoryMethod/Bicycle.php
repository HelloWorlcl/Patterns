<?php

namespace CreationalPatterns\FactoryMethod;

class Bicycle implements IVehicle
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