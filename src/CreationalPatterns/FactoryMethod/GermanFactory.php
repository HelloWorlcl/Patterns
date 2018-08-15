<?php

namespace CreationalPatterns\FactoryMethod;

class GermanFactory extends FactoryMethod
{
    protected function createVehicle(string $type): IVehicle
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $car = new CarMercedes();
                $car->addAMGTuning();

                return $car;
            default:
                throw new \InvalidArgumentException("$type is not valid");
        }
    }
}