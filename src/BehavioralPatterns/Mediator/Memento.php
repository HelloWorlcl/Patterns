<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 16.08.2018
 * Time: 23:50
 */

namespace BehavioralPatterns\Mediator;

class Memento
{
    /** @var State */
    protected $state;

    public function __construct(State $state)
    {
        $this->state = $state;
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }
}
