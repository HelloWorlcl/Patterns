<?php

namespace StructuralPatterns\Bridge;

class HTMLFormatter implements IFormatter
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function format(string $text)
    {
        return "<p>$text</p>";
    }
}