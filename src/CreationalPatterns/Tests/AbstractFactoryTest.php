<?php

namespace CreationalPatterns\Tests;

use CreationalPatterns\AbstractFactory\HTMLFactory;
use CreationalPatterns\AbstractFactory\HTMLText;
use CreationalPatterns\AbstractFactory\JsonFactory;
use CreationalPatterns\AbstractFactory\JsonText;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateHtmlText()
    {
        $factory = new HTMLFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(HTMLText::class, $text);
    }

    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(JsonText::class, $text);
    }
}
