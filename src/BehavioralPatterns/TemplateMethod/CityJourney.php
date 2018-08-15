<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.08.2018
 * Time: 15:27
 */

namespace BehavioralPatterns\TemplateMethod;

class CityJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return 'Eat, drink, take photos and sleep';
    }

    protected function buyGift()
    {
        return 'Buy a gift';
    }
}
