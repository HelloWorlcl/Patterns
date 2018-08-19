<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 19.08.2018
 * Time: 12:35
 */

namespace BehavioralPatterns\Specification;

class NotSpecification implements ISpecification
{
    /** @var ISpecification */
    protected $specification;

    /**
     * NotSpecification constructor.
     *
     * @param ISpecification $specification
     */
    public function __construct(ISpecification $specification)
    {
        $this->specification = $specification;
    }

    /**
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        return !$this->specification->isSatisfiedBy($item);
    }
}
