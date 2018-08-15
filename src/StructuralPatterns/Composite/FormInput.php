<?php

namespace StructuralPatterns\Composite;

class FormInput implements IRenderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }

    public function __toString()
    {
        return $this->render();
    }
}