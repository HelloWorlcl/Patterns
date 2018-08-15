<?php

namespace CreationalPatterns\FactoryMethod;

class ItalianFactory extends FactoryMethod
{
    protected function createVehicle(string $type): IVehicle
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                return new CarFerrari();
            default:
                throw new \InvalidArgumentException("$type is not valid vehicle");
        }
    }
}