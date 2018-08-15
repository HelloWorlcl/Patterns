<?php

namespace CreationalPatterns\Tests;

use CreationalPatterns\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            'CreationalPatterns\StaticFactory\FormatNumber',
            StaticFactory::factory('number')
            );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            'CreationalPatterns\StaticFactory\FormatString',
            StaticFactory::factory('string')
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('object');
    }
}