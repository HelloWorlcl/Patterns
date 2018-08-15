<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 09.05.2018
 * Time: 12:47
 */

namespace StructuralPatterns\Composite;

class FormText implements IRenderable
{
    public $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }

    public function __toString()
    {
        return $this->render();
    }
}