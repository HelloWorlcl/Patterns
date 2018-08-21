<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 20.08.2018
 * Time: 17:07
 */

namespace BehavioralPatterns\State;

class CreatedOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('created');
    }

    public function done()
    {
        static::$state = new ShippingOrder();
    }
}
