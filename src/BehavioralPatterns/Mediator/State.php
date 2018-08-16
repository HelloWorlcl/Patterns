<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 16.08.2018
 * Time: 23:52
 */

namespace BehavioralPatterns\Mediator;

class State
{
    const STATE_CREATED = 'created';
    const STATE_OPENED = 'opened';
    const STATE_ASSIGNED = 'assigned';
    const STATE_CLOSED = 'closed';

    /** @var string */
    protected $state;

    /** @var string[] */
    protected static $validStates = [
        self::STATE_CREATED,
        self::STATE_OPENED,
        self::STATE_ASSIGNED,
        self::STATE_CLOSED
    ];

    /**
     * State constructor.
     * @param string $state
     */
    public function __construct(string $state)
    {
        self::ensureIsValidState($state);

        $this->state = $state;
    }

    /**
     * @param string $state
     */
    protected static function ensureIsValidState(string $state)
    {
        if (!in_array($state, self::$validStates)) {
            throw new \InvalidArgumentException('Invalid state given');
        }
    }

    public function __toString()
    {
        return $this->state;
    }
}
