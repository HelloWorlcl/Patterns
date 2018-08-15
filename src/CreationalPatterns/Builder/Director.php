<?php

namespace CreationalPatterns\Builder;

use CreationalPatterns\Builder\Parts\Vehicle;

class Director
{
    public function build(IBuilder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}