<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 19.08.2018
 * Time: 12:35
 */

namespace BehavioralPatterns\Specification;

class OrSpecification implements ISpecification
{
    /** @var ISpecification[] */
    protected $specifications;

    /**
     * OrSpecification constructor.
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
            if ($specification->isSatisfiedBy($item)) {
                return true;
            }
        }

        return false;
    }
}
