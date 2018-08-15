<?php

namespace StructuralPatterns\Bridge;

class PlainTextFormatter implements IFormatter
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function format(string $text)
    {
        return $text;
    }
}