<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.08.2018
 * Time: 15:38
 */

namespace BehavioralPatterns\Tests;

use BehavioralPatterns\TemplateMethod;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCanGetOnVacationOnTheBeach()
    {
        $journey = new TemplateMethod\BeachJourney();
        $journey->takeATrip();

        $this->assertEquals(
            ['Buy a flight ticket', 'Taking the plane', 'Swimming and sun-bathing', 'Taking the plane'],
            $journey->getThingsToDo()
        );
    }

    /**
     * @throws \Exception
     */
    public function testCanGetOnAJourneyToACity()
    {
        $journey = new TemplateMethod\CityJourney();
        $journey->takeATrip();

        $this->assertEquals(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Eat, drink, take photos and sleep',
                'Buy a gift',
                'Taking the plane'
            ],
            $journey->getThingsToDo()
        );
    }
}
