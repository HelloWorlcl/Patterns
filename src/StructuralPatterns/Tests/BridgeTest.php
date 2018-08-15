<?php

namespace StructuralPatterns\Tests;

use StructuralPatterns\Bridge\HelloWorldService;
use StructuralPatterns\Bridge\PlainTextFormatter;
use StructuralPatterns\Bridge\HTMLFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
        $helloWorldService = new HelloWorldService(new PlainTextFormatter());
        $this->assertEquals('Hello World', $helloWorldService->get());

        $helloWorldService->setImplementation(new HTMLFormatter());
        $this->assertEquals('<p>Hello World</p>', $helloWorldService->get());
    }
}