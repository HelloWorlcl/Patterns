<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 28.05.2018
 * Time: 19:08
 */

namespace StructuralPatterns\Flyweight;

interface IFlyweight
{
    public function render(string $extrinsicState): string;
}