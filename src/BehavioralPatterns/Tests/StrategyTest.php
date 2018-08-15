<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.08.2018
 * Time: 0:26
 */

namespace BehavioralPatterns\Tests;

use BehavioralPatterns\Strategy\Context;
use BehavioralPatterns\Strategy\DateComparator;
use BehavioralPatterns\Strategy\IdComparator;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function provideIntegers()
    {
        return [
            [
                [['id' => 2], ['id' => 1], ['id' => 3]],
                ['id' => 1],
            ],
            [
                [['id' => 3], ['id' => 2], ['id' => 1]],
                ['id' => 1],
            ],
        ];
    }

    public function provideDates()
    {
        return [
            [
                [['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']],
                ['date' => '2013-03-01'],
            ],
            [
                [['date' => '2014-02-03'], ['date' => '2013-02-01'], ['date' => '2015-02-02']],
                ['date' => '2013-02-01'],
            ],
        ];
    }

    /**
     * @dataProvider provideIntegers
     *
     * @param $collection
     * @param $expected
     *
     * @throws \Exception
     */
    public function testIdComparator($collection, $expected)
    {
        $context = new Context(new IdComparator());
        $elements = $context->executeStrategy($collection);

        $firstElement = array_shift($elements);
        $this->assertEquals($expected, $firstElement);
    }

    /**
     * @dataProvider provideDates
     *
     * @param array $collection
     * @param array $expected
     *
     * @throws \Exception
     */
    public function testDateComparator($collection, $expected)
    {
        $context = new Context(new DateComparator());
        $elements = $context->executeStrategy($collection);

        $firstElement = array_shift($elements);
        $this->assertEquals($expected, $firstElement);
    }
}
