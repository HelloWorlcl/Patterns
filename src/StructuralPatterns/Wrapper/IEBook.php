<?php

namespace StructuralPatterns\Wrapper;

interface IEBook
{
    public function unlock();

    public function pressNext();

    /**
     * returns current page and total pages count. E.g [10, 100]
     *
     * @return int[]
     */
    public function getPage(): array;
}