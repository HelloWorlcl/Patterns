<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 20.08.2018
 * Time: 17:06
 */

namespace BehavioralPatterns\State;

abstract class StateOrder
{
    /** @var array */
    protected $details;

    /** @var StateOrder */
    protected static $state;

    abstract public function done();

    /**
     * @param string $status
     */
    protected function setStatus(string $status)
    {
        $this->details['status'] = $status;
        $this->details['updated_at'] = time();
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->details['status'];
    }
}
