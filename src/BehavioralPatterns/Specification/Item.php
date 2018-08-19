<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 19.08.2018
 * Time: 12:33
 */

namespace BehavioralPatterns\Specification;

class Item
{
    /** @var float */
    protected $price;

    /**
     * Item constructor.
     *
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
