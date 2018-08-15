<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 15.08.2018
 * Time: 23:23
 */

namespace BehavioralPatterns\Command;

/**
 * This concrete command calls "print" on the Receiver, but an external
 * invoker just knows that it can call "execute"
 */
class HelloCommand implements ICommand
{
    /** @var Receiver */
    private $output;

    /**
     * Each concrete command is built with different receivers.
     * There can be one, many or completely no receivers, but there can be other commands in the parameters
     *
     */
    public function __construct(Receiver $receiver)
    {
        $this->output = $receiver;
    }

    public function execute()
    {
        // sometimes, there is no receiver and this is the command which does all the work
        $this->output->write('Hello World');
    }
}
