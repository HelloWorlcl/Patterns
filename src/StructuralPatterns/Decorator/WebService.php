<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.05.2018
 * Time: 0:31
 */

namespace StructuralPatterns\Decorator;

class WebService implements IRenderable
{
    /** @var string */
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData(): string
    {
        return $this->data;
    }
}