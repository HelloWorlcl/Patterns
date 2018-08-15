<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 28.05.2018
 * Time: 18:32
 */

namespace StructuralPatterns\Facade;

interface OSInterface
{
    public function halt();

    public function getName(): string;
}