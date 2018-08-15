<?php

namespace CreationalPatterns\Tests;

use CreationalPatterns\Prototype\BarBookPrototype;
use CreationalPatterns\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooAndBarBook()
    {
        $barPrototype = new BarBookPrototype();
        $fooPrototype = new FooBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No ' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }
    }
}
