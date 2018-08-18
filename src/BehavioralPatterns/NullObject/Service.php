<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 17.08.2018
 * Time: 16:37
 */

namespace BehavioralPatterns\NullObject;

class Service
{
    /** @var ILogger */
    protected $logger;

    public function __construct(ILogger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        // notice here that you don't have to check if the logger is set with eg. is_null(), instead just use it
        $this->logger->log('We are in '.__METHOD__);
    }
}
