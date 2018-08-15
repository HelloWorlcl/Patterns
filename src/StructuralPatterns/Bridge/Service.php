<?php

namespace StructuralPatterns\Bridge;

abstract class Service
{
    /**
     * @var IFormatter
     */
    public $implementation;

    /**
     * Service constructor.
     *
     * @param IFormatter $implementation
     */
    public function __construct(IFormatter $implementation)
    {
        $this->implementation = $implementation;
    }

    /**
     * @param IFormatter $implementation
     */
    public function setImplementation(IFormatter $implementation)
    {
        $this->implementation = $implementation;
    }

    abstract public function get();
}