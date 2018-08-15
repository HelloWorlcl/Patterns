<?php

namespace CreationalPatterns\Tests;

use CreationalPatterns\FactoryMethod\Bicycle;
use CreationalPatterns\FactoryMethod\CarFerrari;
use CreationalPatterns\FactoryMethod\CarMercedes;
use CreationalPatterns\FactoryMethod\FactoryMethod;
use CreationalPatterns\FactoryMethod\GermanFactory;
use CreationalPatterns\FactoryMethod\ItalianFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateCheapVehicleInGermany()
    {
        $factory = new GermanFactory();
        $vehicle = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $vehicle);
    }

    public function testCanCreateFastVehicleInGermany()
    {
        $factory = new GermanFactory();
        $vehicle = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarMercedes::class, $vehicle);
    }

    public function testCanCreateCheapVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $vehicle = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $vehicle);
    }

    public function testCanCreateFastVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $vehicle = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarFerrari::class, $vehicle);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not valid vehicle
     */
    public function testUnknownType()
    {
        (new ItalianFactory())->create('spaceship');
    }


}
