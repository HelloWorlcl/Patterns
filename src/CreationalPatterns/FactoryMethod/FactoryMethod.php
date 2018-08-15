<?php

namespace CreationalPatterns\FactoryMethod;

abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle(string $type): IVehicle;

    public function create(string $type): IVehicle
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('black');

        return $obj;
    }
}