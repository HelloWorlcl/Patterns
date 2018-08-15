<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.05.2018
 * Time: 0:30
 */

namespace StructuralPatterns\Decorator;

interface IRenderable
{
    public function renderData(): string;
}