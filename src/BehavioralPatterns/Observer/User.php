<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 18.08.2018
 * Time: 20:38
 */

namespace BehavioralPatterns\Observer;

use SplObserver;

class User implements \SplSubject
{
    /** @var string */
    protected $email;

    /** @var \SplObjectStorage */
    protected $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * @param string $email
     */
    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
