<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 19.08.2018
 * Time: 12:33
 */

namespace BehavioralPatterns\Specification;

interface ISpecification
{
    /**
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool;
}
