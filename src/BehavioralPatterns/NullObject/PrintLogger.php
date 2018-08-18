<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 17.08.2018
 * Time: 16:37
 */

namespace BehavioralPatterns\NullObject;

class PrintLogger implements ILogger
{
    public function log(string $str)
    {
        echo $str;
    }
}
