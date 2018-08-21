<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 20.08.2018
 * Time: 17:18
 */

namespace BehavioralPatterns\Tests;

use BehavioralPatterns\State\ContextOrder;
use BehavioralPatterns\State\CreatedOrder;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCanShipCreatedOrder()
    {
        $order = new CreatedOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();

        $this->assertEquals('shipping', $contextOrder->getStatus());
    }

    /**
     * @throws \Exception
     */
    public function testCanCompleteShippedOrder()
    {
        $order = new CreatedOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();
        $contextOrder->done();

        $this->assertEquals('completed', $contextOrder->getStatus());
    }
}
