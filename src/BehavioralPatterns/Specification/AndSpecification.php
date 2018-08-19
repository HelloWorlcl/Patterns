<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 19.08.2018
 * Time: 12:35
 */

namespace BehavioralPatterns\Specification;

class AndSpecification implements ISpecification
{
    /** @var ISpecification[] */
    protected $specifications;

    /**
     * AndSpecification constructor.
     *
     * @param ISpecification[] ...$specifications
     */
    public function __construct(ISpecification ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }

        return true;
    }
}
