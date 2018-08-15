<?php

namespace CreationalPatterns\SimpleFactory;

class SimpleFactory
{
    /**
     * @return Bicycle
     */
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}