<?php

namespace StructuralPatterns\Wrapper;

interface IBook
{
    public function open();

    public function turnPage();

    public function getPage(): int;
}
