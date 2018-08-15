<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 15.08.2018
 * Time: 23:38
 */

namespace BehavioralPatterns\Tests;

use BehavioralPatterns\Command\HelloCommand;
use BehavioralPatterns\Command\Invoker;
use BehavioralPatterns\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();

        $this->assertEquals('Hello World', $receiver->getOutput());
    }
}
