<?php

namespace CreationalPatterns\Builder;

use CreationalPatterns\Builder\Parts\Vehicle;

interface IBuilder
{
    public function createVehicle();

    public function addDoors();

    public function addEngine();

    public function addWheel();

    public function getVehicle(): Vehicle;
}