<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 19.08.2018
 * Time: 12:35
 */

namespace BehavioralPatterns\Specification;

class PriceSpecification implements ISpecification
{
    /** @var float|null */
    protected $minPrice;

    /** @var float|null */
    protected $maxPrice;

    /**
     * PriceSpecification constructor.
     *
     * @param float|null $minPrice
     * @param float|null $maxPrice
     */
    public function __construct(float $minPrice = null, float $maxPrice = null)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    /**
     * @return float|null
     */
    public function getMinPrice(): ?float
    {
        return $this->minPrice;
    }

    /**
     * @return float|null
     */
    public function getMaxPrice(): ?float
    {
        return $this->maxPrice;
    }

    /**
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        if ($this->minPrice !== null && $item->getPrice() < $this->getMinPrice()) {
            return false;
        }

        if ($this->maxPrice !== null && $item->getPrice() > $this->getMaxPrice()) {
            return false;
        }

        return true;
    }
}
