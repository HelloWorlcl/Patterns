<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 15.08.2018
 * Time: 23:23
 */

namespace BehavioralPatterns\Command;

class Invoker
{
    /** @var ICommand */
    protected $command;

    /**
     * in the invoker we find this kind of method for subscribing the command
     * There can be also a stack, a list, a fixed set ...
     *
     * @param ICommand $command
     */
    public function setCommand(ICommand $command)
    {
        $this->command = $command;
    }

    /**
     * executes the command; the invoker is the same whatever is the command
     */
    public function run()
    {
        $this->command->execute();
    }
}
