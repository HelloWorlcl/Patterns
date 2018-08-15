<?php

namespace CreationalPatterns\AbstractFactory;

class HTMLFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        return new HTMLText($content);
    }
}
