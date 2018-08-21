<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 20.08.2018
 * Time: 17:06
 */

namespace BehavioralPatterns\State;

class ContextOrder extends StateOrder
{
    /**
     * @return StateOrder
     */
    public function getState(): StateOrder
    {
        return static::$state;
    }

    /**
     * @param StateOrder $state
     */
    public function setState(StateOrder $state)
    {
        static::$state = $state;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return static::$state->getStatus();
    }

    public function done()
    {
        static::$state->done();
    }
}
