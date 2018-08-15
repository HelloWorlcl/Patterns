<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 28.05.2018
 * Time: 19:10
 */

namespace StructuralPatterns\Flyweight;

class FlyweightCharacter implements IFlyweight
{
    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $font): string
    {
        return sprintf('Character %s with font %s', $this->name, $font);
    }
}