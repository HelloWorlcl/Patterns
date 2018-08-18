<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 18.08.2018
 * Time: 20:45
 */

namespace BehavioralPatterns\Tests;

use BehavioralPatterns\Observer\User;
use BehavioralPatterns\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $userObserver = new UserObserver();

        $user = new User();
        $user2 = new User();

        $user->attach($userObserver);
        $user2->attach($userObserver);

        $user->changeEmail('foo@bar.com');
        $user2->changeEmail('bar@foo.com');

        $this->assertCount(2, $userObserver->getChangedUsers());
    }
}
