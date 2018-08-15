<?php

namespace StructuralPatterns\Wrapper;

class Book implements IBook
{
    /**
     * @var int
     */
    public $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}