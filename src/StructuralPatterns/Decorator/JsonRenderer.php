<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.05.2018
 * Time: 0:39
 */

namespace StructuralPatterns\Decorator;

class JsonRenderer extends RendererDecorator
{
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }
}