<?php

namespace CreationalPatterns\FactoryMethod;

class CarMercedes implements IVehicle
{
    /**
     * @var string
     */
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }

    public function addAMGTuning()
    {
        //do additional tuning here
    }
}