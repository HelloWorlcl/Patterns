<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 09.05.2018
 * Time: 12:53
 */

namespace StructuralPatterns\Tests;

use StructuralPatterns\Composite\Form;
use StructuralPatterns\Composite\FormInput;
use StructuralPatterns\Composite\FormText;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();

        $form->addElement(new FormText('Name: '));
        $form->addElement(new FormInput());

        $form->addElement(new FormText('Surname: '));
        $form->addElement(new formInput());

        $this->assertEquals(
            '<form>Name: <input type="text" />Surname: <input type="text" /></form>',
            $form->render()
        );
    }
}