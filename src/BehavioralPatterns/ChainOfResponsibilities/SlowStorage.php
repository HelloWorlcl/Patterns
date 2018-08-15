<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 13.08.2018
 * Time: 23:55
 */

namespace BehavioralPatterns\ChainOfResponsibilities;

class SlowStorage extends Handler
{
    /**
     * @param \HttpRequest $request
     *
     * @return string
     */
    public function processing(\HttpRequest $request)
    {
        return 'Hello World!';
    }
}