<?php
///**
// * Created by PhpStorm.
// * User: Everest
// * Date: 28.05.2018
// * Time: 18:38
// */
//
//namespace StructuralPatterns\Tests;
//
//use StructuralPatterns\Facade\OSInterface;
//use StructuralPatterns\Facade\BIOSInterface;
//use StructuralPatterns\Facade\Facade;
//use PHPUnit\Framework\TestCase;
//
//class FacadeTest extends TestCase
//{
//    public function testComputerOn()
//    {
//        /** @var OsInterface|\PHPUnit_Framework_MockObject_MockObject $os */
//        $os = $this->createMock('StructuralPatterns\Facade\OSInterface');
//
//        $os->method('getName')
//            ->will($this->returnValue('Linux'));
//
//        $bios = $this->getMockBuilder('StructuralPatterns\Facade\BIOSInterface')
//            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
//            ->disableAutoload()
//            ->getMock();
//
//        $bios->expects($this->once())
//            ->method('launch')
//            ->with($os);
//
//        $facade = new Facade($bios, $os);
//
//        // the facade interface is simple
//        $facade->turnOn();
//
//        // but you can also access the underlying components
//        $this->assertEquals('Linux', $os->getName());
//    }
//}