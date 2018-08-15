<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.05.2018
 * Time: 0:35
 */

namespace StructuralPatterns\Decorator;

class XmlRenderer extends RendererDecorator
{
    public function renderData(): string
    {
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));

        return $doc->saveXML();
    }
}