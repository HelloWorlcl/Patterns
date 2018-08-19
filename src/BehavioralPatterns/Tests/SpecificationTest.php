<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 19.08.2018
 * Time: 12:57
 */

namespace BehavioralPatterns\Tests;

use BehavioralPatterns\Specification\AndSpecification;
use BehavioralPatterns\Specification\Item;
use BehavioralPatterns\Specification\NotSpecification;
use BehavioralPatterns\Specification\OrSpecification;
use BehavioralPatterns\Specification\PriceSpecification;
use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCanOr()
    {
        $spec1 = new PriceSpecification(50, 99);
        $spec2 = new PriceSpecification(101, 200);

        $orSpec = new OrSpecification($spec1, $spec2);

        $this->assertFalse($orSpec->isSatisfiedBy(new Item(100)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(51)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(150)));
    }

    /**
     * @throws \Exception
     */
    public function testCanAnd()
    {
        $spec1 = new PriceSpecification(50, 100);
        $spec2 = new PriceSpecification(80, 200);

        $andSpec = new AndSpecification($spec1, $spec2);

        $this->assertFalse($andSpec->isSatisfiedBy(new Item(150)));
        $this->assertFalse($andSpec->isSatisfiedBy(new Item(1)));
        $this->assertFalse($andSpec->isSatisfiedBy(new Item(51)));
        $this->assertTrue($andSpec->isSatisfiedBy(new Item(100)));

    }

    /**
     * @throws \Exception
     */
    public function testCanNot()
    {
        $spec1 = new PriceSpecification(50, 99);
        $notSpec = new NotSpecification($spec1);

        $this->assertTrue($notSpec->isSatisfiedBy(new Item(150)));
        $this->assertFalse($notSpec->isSatisfiedBy(new Item(50)));
    }
}
