<?php

namespace CreationalPatterns\Tests;

use CreationalPatterns\SimpleFactory\SimpleFactory;
use CreationalPatterns\SimpleFactory\Bicycle;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $simpleFactory = new SimpleFactory();

        $bicycle = $simpleFactory->createBicycle();
        $bicycle->driveTo('Paris');

        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}
