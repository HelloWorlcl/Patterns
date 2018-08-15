<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 28.05.2018
 * Time: 18:30
 */

namespace StructuralPatterns\Facade;

class Facade
{
    /** @var OSInterface */
    private $os;

    /** @var BIOSInterface */
    private $bios;

    /**
     * Facade constructor.
     * @param OSInterface $os
     * @param BIOSInterface $bios
     */
    public function __construct($os, $bios)
    {
        $this->os = $os;
        $this->bios = $bios;
    }

    public function turnOn()
    {
        $this->bios->launch();
        $this->bios->waitForKeyPress();
        $this->bios->execute($this->os);
    }

    public function turnOf()
    {
        $this->os->halt();
        $this->bios->turnDown();
    }
}