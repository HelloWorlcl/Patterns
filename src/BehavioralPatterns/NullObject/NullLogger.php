<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 17.08.2018
 * Time: 16:38
 */

namespace BehavioralPatterns\NullObject;

class NullLogger implements ILogger
{
    public function log(string $str)
    {
        //do nothing
    }
}
