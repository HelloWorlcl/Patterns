<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 28.05.2018
 * Time: 18:32
 */

namespace StructuralPatterns\Facade;

interface BIOSInterface
{
    public function launch();

    public function waitForKeyPress();

    public function execute(OSInterface $os);

    public function turnDown();
}