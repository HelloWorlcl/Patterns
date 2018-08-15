<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.08.2018
 * Time: 0:18
 */

namespace BehavioralPatterns\Strategy;

class Context
{
    /** @var IComparator */
    private $comparator;

    /**
     * Context constructor.
     * @param IComparator $comparator
     */
    public function __construct(IComparator $comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * @param array $collection
     *
     * @return array
     */
    public function executeStrategy(array $collection): array
    {
        uasort($collection, [$this->comparator, 'compare']);

        return $collection;
    }
}
