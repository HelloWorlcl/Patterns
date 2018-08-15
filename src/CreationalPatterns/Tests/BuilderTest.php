<?php

namespace CreationalPatterns\Tests;

use CreationalPatterns\Builder\CarBuilder;
use CreationalPatterns\Builder\Director;
use CreationalPatterns\Builder\TruckBuilder;
use CreationalPatterns\Builder\Parts\Car;
use CreationalPatterns\Builder\Parts\Truck;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $car = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $car);
    }

    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $truck = (new Director())->build($truckBuilder);

        $this->assertInstanceof(Truck::class, $truck);
    }
}
