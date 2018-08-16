<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 17.08.2018
 * Time: 0:06
 */

namespace BehavioralPatterns\Tests;

use BehavioralPatterns\Mediator\State;
use BehavioralPatterns\Mediator\Ticket;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testOpenTicketAssignAndGetBackToOpen()
    {
        $ticket = new Ticket();

        $ticket->open();
        $openedState = $ticket->getState();
        $this->assertEquals(State::STATE_OPENED, $ticket->getState());

        $memento = $ticket->saveToMemento();

        $ticket->assign();
        $this->assertEquals(State::STATE_ASSIGNED, $ticket->getState());

        $ticket->restoreFromMemento($memento);

        $this->assertEquals(State::STATE_OPENED, $ticket->getState());
        $this->assertNotSame($openedState, $ticket->getState());
    }
}
