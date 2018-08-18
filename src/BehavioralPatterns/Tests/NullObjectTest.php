<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 17.08.2018
 * Time: 16:43
 */

namespace BehavioralPatterns\Tests;

use BehavioralPatterns\NullObject\NullLogger;
use BehavioralPatterns\NullObject\PrintLogger;
use BehavioralPatterns\NullObject\Service;
use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());

        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());

        $this->expectOutputString('We are in BehavioralPatterns\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
