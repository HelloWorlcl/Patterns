<?php

namespace CreationalPatterns\Builder;

use CreationalPatterns\Builder\Parts\Vehicle;

class CarBuilder implements IBuilder
{
    /**
     * @var Parts\Car
     */
    private $car;

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function addDoors()
    {
        $this->car->setPart('leftDoor', new Parts\Door());
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('leftFW', new Parts\Wheel());
        $this->car->setPart('rightFW', new Parts\Wheel());
        $this->car->setPart('leftBW', new Parts\Wheel());
        $this->car->setPart('rightBW', new Parts\Wheel());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}