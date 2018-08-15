<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.05.2018
 * Time: 0:41
 */

namespace StructuralPatterns\Tests;

use StructuralPatterns\Decorator;
use StructuralPatterns\Decorator\RendererDecorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /** @var Decorator\WebService */
    private $webService;

    public function setUp()
    {
        $this->webService = new Decorator\WebService('foobar');
    }

    public function testJsonDecorator()
    {
        $service = new Decorator\JsonRenderer($this->webService);

        $this->assertEquals('"foobar"', $service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new Decorator\XmlRenderer($this->webService);

        $this->assertXmlStringEqualsXmlString(
            '<?xml version="1.0"?><content>foobar</content>',
            $service->renderData()
        );
    }
}