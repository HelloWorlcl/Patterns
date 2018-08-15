<?php

namespace StructuralPatterns\Wrapper;

class Kindle implements IEBook
{
    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $totalPages;

    public function unlock()
    {
//        $this->page = 1;
    }

    public function pressNext()
    {
        $this->page++;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}