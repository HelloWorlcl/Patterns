<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 15.08.2018
 * Time: 23:23
 */

namespace BehavioralPatterns\Command;

interface ICommand
{
    /**
     * this is the most important method in the Command pattern,
     * The Receiver goes in the constructor.
     */
    public function execute();
}
