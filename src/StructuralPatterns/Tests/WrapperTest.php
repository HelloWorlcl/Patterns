<?php

namespace StructuralPatterns\Tests;

use StructuralPatterns\Wrapper\Book;
use StructuralPatterns\Wrapper\EBookAdapter;
use PHPUnit\Framework\TestCase;
use StructuralPatterns\Wrapper\Kindle;

class WrapperTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindle()
    {
        $kindle = new Kindle();
        $eBookAdapter = new EBookAdapter($kindle);

        $eBookAdapter->open();
        $eBookAdapter->turnPage();

        $this->assertEquals(1, $eBookAdapter->getPage());
    }
}