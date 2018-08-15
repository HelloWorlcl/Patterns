<?php

namespace StructuralPatterns\Composite;

class Form implements IRenderable
{
    /**
     * @var IRenderable[]
     */
    public $elements = [];

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element;
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(IRenderable $element)
    {
        $this->elements[] = $element;
    }
}