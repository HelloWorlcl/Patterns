<?php

namespace CreationalPatterns\StaticFactory;

final class StaticFactory
{
    /**
     * @param string $type
     *
     * @return IFormatter
     */
    public static function factory(string $type): IFormatter
    {
        switch ($type) {
            case 'string':
                return new FormatString();
            case 'number':
                return new FormatNumber();
            default:
                throw new \InvalidArgumentException('Unknown format given');
        }
    }
}