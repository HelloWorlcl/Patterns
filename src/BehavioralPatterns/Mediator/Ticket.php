<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 16.08.2018
 * Time: 23:52
 */

namespace BehavioralPatterns\Mediator;

class Ticket
{
    /** @var State */
    protected $currentState;

    public function create()
    {
        $this->currentState = new State(State::STATE_CREATED);
    }

    public function open()
    {
        $this->currentState = new State(State::STATE_OPENED);
    }

    public function assign()
    {
        $this->currentState = new State(State::STATE_ASSIGNED);
    }

    public function close()
    {
        $this->currentState = new State(State::STATE_CLOSED);
    }

    /**
     * @return Memento
     */
    public function saveToMemento(): Memento
    {
        return new Memento(clone $this->getState());
    }

    /**
     * @param Memento $memento
     */
    public function restoreFromMemento(Memento $memento)
    {
        $this->currentState = $memento->getState();
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->currentState;
    }
}
