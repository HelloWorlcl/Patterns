<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 28.05.2018
 * Time: 19:12
 */

namespace StructuralPatterns\Flyweight;

class FlyweightFactory implements \Countable
{
    /** @var FlyweightCharacter[] */
    private $pool;

    public function get(string $name): FlyweightCharacter
    {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new FlyweightCharacter($name);
        }

        return $this->pool[$name];
    }

    public function count(): int
    {
        return count($this->pool);
    }
}