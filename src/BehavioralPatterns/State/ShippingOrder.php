<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 20.08.2018
 * Time: 17:07
 */

namespace BehavioralPatterns\State;

class ShippingOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('shipping');
    }

    public function done()
    {
        $this->setStatus('completed');
    }
}
