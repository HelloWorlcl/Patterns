<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 18.08.2018
 * Time: 20:38
 */

namespace BehavioralPatterns\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    /** @var User[] */
    protected $changedUsers;

    /**
     * It is called by the Subject, usually by SplSubject::notify()
     *
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return array
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
