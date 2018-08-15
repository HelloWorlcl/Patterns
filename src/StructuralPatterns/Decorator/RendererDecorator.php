<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.05.2018
 * Time: 0:32
 */

namespace StructuralPatterns\Decorator;

abstract class RendererDecorator implements IRenderable
{
    /** @var IRenderable */
    public $wrapped;

    /**
     * @param IRenderable $renderer
     */
    public function __construct(IRenderable $renderer)
    {
        $this->wrapped = $renderer;
    }
}